DELIMITER $$
CREATE PROCEDURE TEST_PROC(
	IN IN_NUM INT
) 
BEGIN
	SELECT *
	FROM employees
	LIMIT IN_NUM;
END $$
DELIMITER ;

SHOW PROCEDURE STATUS;

CALL TEST_PROC(2);

-- DROP PROCEDURE TEST_PROC;