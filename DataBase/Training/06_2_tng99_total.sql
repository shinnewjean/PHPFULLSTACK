INSERT INTO employees (
	emp_no
	,birth_date
	,first_name
	,last_name
	,gender
	,hire_date
)
VALUES
(	500000
	,'1997-08-11'
	,'Yujin'
	,'Shin'
	,'F'
	,DATE(20230316)
)
,
(	500001
	,19941212
	,'Minjin'
	,'Kim'
	,'F'
	,NOW()
)
,
(	500002
	,date(19980712)
	,'Gawon'
	,'Lee'
	,'F'
	,DATE(20230228)
);

SELECT *
FROM employees
WHERE emp_no >= 500000;



INSERT INTO salaries (
	emp_no
	,salary
	,from_date
	,to_date
)
VALUES
(	500000
	,3000000
	,DATE(20230316)
	,DATE(20230416)
)
,
(	500001
	,5000000
	,DATE(20201212)
	,NOW()
)
,
(	500002
	,77777
	,DATE(20230228)
	,DATE(20240228)
);


SELECT *
FROM salaries
WHERE emp_no >= 500000;


INSERT INTO titles (
	emp_no
	,title
	,from_date
	,to_date
)
VALUES
(	500000
	,'Assistant Engineer'
	,DATE(20181130)
	,DATE(99990101)
)
,
(	500001
	,'staff'
	,DATE(20201212)
	,NOW()
)
,
(	500002
	,'Junior Developer'
	,DATE(20230228)
	,DATE(20240228)
);
SELECT *
FROM  titles
WHERE emp_no >= 500000;

INSERT INTO dept_emp (
	emp_no
	,dept_no
	,from_date
	,to_date
)
VALUES
(	500000
	,'d001'
	,DATE(20181130)
	,DATE(99990101)
)
,
(	500001
	,'d007'
	,DATE(20201212)
	,NOW()
)
,
(	500002
	,'d005'
	,DATE(20230228)
	,DATE(20240228)
);
SELECT *
FROM  dept_emp
WHERE emp_no >= 500000;


-- 4.나와 짝궁의 소속 부서를 d009로 변경해 주세요.
UPDATE dept_emp
SET to_date=NOW()
WHERE emp_no >= 500000;

INSERT INTO dept_emp (
	emp_no
	,dept_no
	,from_date
	,to_date
)
VALUES
(	500000
	,'d009'
	,NOW()
	,DATE(99990101)
)
,
(	500001
	,'d009'
	,NOW()
	,DATE(99990101)
)
,
(	500002
	,'d009'
	,NOW()
	,DATE(99990101)
);


-- 5. 짝궁의 모든 정보를 삭제해 주세요.
-- DELETE FROM employees
WHERE emp_no > 500000;

SELECT *
FROM  employees
WHERE emp_no >= 500000;


-- 6.'d009'부서의 관리자를 나로 변경해 주세요.
UPDATE dept_manager
SET to_date=NOW()
WHERE dept_no = 'd009'AND to_date > NOW();

INSERT INTO dept_manager (
	dept_no
	,emp_no
	,from_date
	,to_date
)
VALUES
(	'd009'
	,500000
	,NOW()
	,DATE(99990101)
);


-- 7. 오늘 날짜부로 나의 직책을 'Senior Engineer'로 변경해 주세요.
UPDATE titles
SET to_date = NOW()
WHERE emp_no = 500000;

INSERT INTO titles (
	emp_no
	,title
	,from_date
	,to_date
)
VALUES
(	500000
	,'Senior Engineer'
	,NOW()
	,DATE(99990101)
);

-- 8. 최고연봉사원과 최저연봉사원의 사번과 이름을 출력해 주세요.
SELECT emp_no, first_name, last_name
FROM employees
WHERE emp_no =(SELECT emp_no
					FROM salaries
					WHERE salary= (SELECT MAX(salary)
										FROM salaries)
										);

SELECT emp_no, first_name, last_name
FROM employees
WHERE emp_no =(SELECT emp_no
					FROM salaries
					WHERE salary= (SELECT MIN(salary)
										FROM salaries)
										);


SELECT emp_no, first_name
FROM employees
WHERE emp_no IN (SELECT emp_no
						FROM salaries
						WHERE salary IN ((SELECT MAX(salary) FROM salaries)
												,(SELECT MIN(salary) FROM salaries)
												)
					);
					
SELECT emp_no, first_name
FROM employees
WHERE emp_no = 
		(SELECT emp_no FROM salaries ORDER BY salary LIMIT 1)
		OR
		emp_no = 
		(SELECT emp_no FROM salaries ORDER BY salary DESC LIMIT 1)
;					
						
												

-- 9. 전체 사원의 평균 연봉을 출력해 주세요.
SELECT AVG(salary)
 FROM salaries;
 

-- 10.사번이 499,975인 사원의 지금까지 평균 연봉을 출력해 주세요.
SELECT  AVG(salary)
FROM salaries
WHERE emp_no = 499975;

-- 모두지우기
-- DELETE FROM employees 

WHERE emp_no >=500000;

-- ROLLBACK;

-- commit;

