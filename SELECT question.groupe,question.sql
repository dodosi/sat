SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'adoptingSecureTechnology' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.adoptingSecureTechnology')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'challengesOfDrivingSecurityInvestments' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.challengesOfDrivingSecurityInvestments')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'deployableDevicesVulnerability' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.deployableDevicesVulnerability')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'DSbD' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.DSbD')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'DSbDsignificancy' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.DSbDsignificancy')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'DSbDtechnologySolution' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.DSbDtechnologySolution')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'hardwareVulnerability' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.hardwareVulnerability')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'improvingSecurityJustfication' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.improvingSecurityJustfication')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'incidentConcerns' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.incidentConcerns')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'investmentInCybersecurity' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.investmentInCybersecurity')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'ITbudget' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.ITbudget')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'knowledgeInSecurebyDefault' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.knowledgeInSecurebyDefault')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'levelofPrioritytoCybersecurity' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.levelofPrioritytoCybersecurity')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'natureofDataUsed' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.natureofDataUsed')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'obstaclesToDSbD' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.obstaclesToDSbD')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'priorExperienceOfSecurityIncidents' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.priorExperienceOfSecurityIncidents')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'prioritizationOfSecuritybyOtherParts' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.prioritizationOfSecuritybyOtherParts')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'productsCompromised' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.productsCompromised')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'promotionSecurity' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.promotionSecurity')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'purchasingTechnology' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.purchasingTechnology')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'rangeofIncidents' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.rangeofIncidents')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'ratingOrganizationPriority' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.ratingOrganizationPriority')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'reducingVulnerabilities' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.reducingVulnerabilities')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'reportingofIncidents' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.reportingofIncidents')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'resilienceOfDevices' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.resilienceOfDevices')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'securebyDefault' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.securebyDefault')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'secureTechnologies' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.secureTechnologies')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'securityAspectsProducts' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.securityAspectsProducts')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'securityAssuranceProcurement' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.securityAssuranceProcurement')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'securityAssurances' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.securityAssurances')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'securityAttention' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.securityAttention')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'securityHighPriority' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.securityHighPriority')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'securityInvestmentbyThreats' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.securityInvestmentbyThreats')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'securityInvestmentMotivation' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.securityInvestmentMotivation')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'securityInvestmentsToChanges' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.securityInvestmentsToChanges')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'selectingDSbD' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.selectingDSbD')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'softwareVulnerability' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.softwareVulnerability')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'spendingOnMoreSecureDevice' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.spendingOnMoreSecureDevice')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'technogyBasedDisruption' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.technogyBasedDisruption')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'technologyContext' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.technologyContext')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'technologyDevices' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.technologyDevices')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'technologyTypes' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.technologyTypes')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'technologyUsage' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.technologyUsage')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'upperManagement' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.upperManagement')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 
UNION
SELECT question.groupe,question.data_capture,question.category,question.flag,data1.* FROM(SELECT results.id results.responder results.survey_id results.date,'WillingnessToImproveCybersecurity' AS attribute,  JSON_UNQUOTE(JSON_EXTRACT(results.results, '$.WillingnessToImproveCybersecurity')) AS value
FROM  results) AS data1 INNER JOIN question ON name=data1.attribute WHERE data1.value IS NOT NULL 