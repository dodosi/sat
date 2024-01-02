SELECT
    results.id,
    TRIM(BOTH '"' FROM SUBSTRING_INDEX(SUBSTRING_INDEX(results.results->'$.technologyUsage', ',', numbers.n + 1), ',', -1)) AS value
FROM
    results,
    (SELECT 0 AS n UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3) AS numbers
WHERE
    CHAR_LENGTH(results.results->'$.technologyUsage') - CHAR_LENGTH(REPLACE(results.results->'$.results', ',', '')) >= numbers.n;


TRIM(BOTH '"' FROM SUBSTRING_INDEX(your_table.your_string_column, ',', 1)) AS first_element