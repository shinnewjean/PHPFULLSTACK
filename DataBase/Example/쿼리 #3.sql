-- 
INSERT INTO employees(
	emp_no
	,birth_date
	,first_name
	,last_name
	,gender
	,hire_date
)

VALUES(
	500000
	,NOW()
	,'YUJIN'
	,'SHIN'
	,'F'
	,NOW()
)

UPDATE employees 
	SET first_name='Yujin'
	WHERE emp_no = 500000;
	
UPDATE employees 
	SET last_name='Shin'
	WHERE emp_no = 500000;
	
SELECT *
	FROM employees
	WHERE emp_no = 500000;
	
SELECT *
	FROM employees
	WHERE emp_no = 500000;