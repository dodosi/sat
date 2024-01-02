SELECT JSON_UNQUOTE(JSON_EXTRACT(results, '$.technogyBasedDisruption')) technogyBasedDisruption,
survey_id as position FROM results
WHERE JSON_UNQUOTE(JSON_EXTRACT(results, '$.technogyBasedDisruption')) IS NOT NULL;