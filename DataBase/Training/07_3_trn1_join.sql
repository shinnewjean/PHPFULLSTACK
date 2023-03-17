1. 사원의 사원번호, 풀네임, 직책명을 출력해 주세요.
SELECT emp.emp_no, CONCAT(emp.first_name,' ', emp.last_name) FULLNAME , title.title
FROM employees emp
	INNER JOIN titles title
		ON emp.emp_no = title.emp_no
WHERE title.to_date =DATE(99990101);

2. 사원의 사원번호, 성별, 현재 월급을 출력해 주세요.
SELECT emp.emp_no, emp.gender, salary.salary
FROM employees emp
	INNER JOIN salaries salary
		ON emp.emp_no = salary.emp_no
WHERE salary.to_date= DATE(99990101) ;


3. 10010 사원의 풀네임, 과거부터 현재까지 월급 이력을 출력해 주세요.
SELECT emp.emp_no, CONCAT(emp.first_name,' ', emp.last_name) FULLNAME, salary.salary
FROM employees emp
	INNER JOIN salaries salary
		ON emp.emp_no = salary.emp_no
WHERE emp.emp_no = 10001;

4. 사원의 사원번호, 풀네임, 소속부서명을 출력해 주세요.
SELECT emp.emp_no, CONCAT(emp.first_name,' ', emp.last_name) FULLNAME , dept.dept_no, d_n.dept_name
FROM employees emp
	INNER JOIN dept_emp dept
		ON emp.emp_no = dept.emp_no
	INNER JOIN departments d_n
		ON dept.dept_no = d_n.dept_no
WHERE dept.to_date= DATE(99990101)
ORDER BY.
+mp.emp_no ASC ;


5. 현재 월급의 상위 10위까지 사원의 사번, 풀네임, 월급을 출력해 주세요.
SELECT emp.emp_no, CONCAT(emp.first_name,' ', emp.last_name) FULLNAME, RANK() OVER(ORDER BY salary.salary DESC) r, salary.salary
FROM employees emp
	INNER JOIN salaries salary
/	ON emp.emp_no = salary.emp_no
WHERE salary.to_date= DATE(99990101)
ORDER BY salary.salary DESC
LIMIT 10;

SELECT emp.emp_no, CONCAT(emp.first_name,' ', emp.last_name) FULLNAME, salary.salary
FROM employees emp
	INNER JOIN salaries salary
		ON emp.emp_no = salary.emp_no
WHERE salary.to_date>NOW()
ORDER BY salary.salary DESC
LIMIT 10;

SELECT RNK.*
FROM(
	SELECT 
		emp.emp_no
		,CONCAT(emp.first_name,' ', emp.last_name) FULLNAME
		,sal.salary
		,RANK() OVER(ORDER BY sal.salary DESC) rn
	FROM employees emp
		INNER JOIN salaries sal
		ON emp.emp_no = sal.emp_no
	WHERE sal.to_date >= NOW()
	)RNK
WHERE RNK.rn <= 10;

6. 각 부서의 부서장의 부서명, 풀네임, 입사일을 출력해 주세요.
SELECT d_m.dept_no, CONCAT(emp.first_name,' ', emp.last_name) FULLNAME , emp.hire_date
FROM employees emp
	INNER JOIN dept_manager d_m
		ON emp.emp_no = d_m.emp_no
WHERE d_m.to_date>NOW();

SELECT dept.dept_name
		,dept.dept_no
		,CONCAT(emp.first_name,' ', emp.last_name) FULLNAME 
		,emp.hire_date
FROM employees emp
	INNER JOIN dept_manager d_m
		ON emp.emp_no = d_m.emp_no
	INNER JOIN departments dept
		ON dept.dept_no = d_m.dept_no
WHERE d_m.to_date >= NOW();

SELECT dept.dept_name
		,dept.dept_no
		,CONCAT(emp.first_name,' ', emp.last_name) FULLNAME 
		,emp.hire_date
FROM departments dept
	LEFT OUTER JOIN dept_manager d_m ON dept.dept_no = d_m.dept_no
	INNER JOIN employees emp  ON emp.emp_no = d_m.emp_no 
WHERE d_m.to_date >= NOW();


7. 현재 직책이 "Staff"인 사원의 현재 전체 평균 월급를 출력해 주세요.
SELECT title.title, AVG(salary.salary)
FROM titles title
	INNER JOIN salaries salary
		ON title.emp_no = salary.emp_no
WHERE title.title = 'Staff' AND salary.to_date= DATE(99990101) AND title.to_date= DATE(99990101) ;

8. 부서장직을 역임했던 모든 사원의 풀네임과 입사일, 사번, 부서번호를 출력해 주세요.
SELECT CONCAT(emp.first_name,' ', emp.last_name) FULLNAME , emp.hire_date, emp.emp_no, d_m.dept_no
FROM employees emp
	INNER JOIN dept_manager d_m
		ON emp.emp_no = d_m.emp_no;
		
SELECT CONCAT(emp.first_name,' ', emp.last_name) FULLNAME , emp.hire_date, emp.emp_no, d_m.dept_no
FROM employees emp
	INNER JOIN dept_manager d_m
		ON emp.emp_no = d_m.emp_no
WHERE d_m.to_date != DATE(99990101);


9. 현재 각 직급별 평균월급 중 60,000이상인 직급의 직급명, 평균월급(정수)를 내림차순으로 출력해 주세요.
-- 숫자열
SELECT title.title, TRUNCATE(AVG(salary.salary) ,0) AS avgs
FROM titles title
	INNER JOIN salaries salary
		ON title.emp_no = salary.emp_no
WHERE salary.to_date>NOW()
GROUP BY title.title HAVING avgs >= 60000
ORDER BY avgs DESC;

-- 문자열
SELECT title.title, FORMAT(AVG(salary.salary) ,0)
FROM titles title
	INNER JOIN salaries salary
		ON title.emp_no = salary.emp_no
WHERE salary.to_date>NOW()
GROUP BY title.title HAVING AVG(salary.salary) >= 60000
ORDER BY AVG(salary.salary) DESC;

SELECT title.title, TRUNCATE(AVG(salary.salary) ,0) avgs
FROM titles title
	INNER JOIN salaries salary
		ON title.emp_no = salary.emp_no
WHERE salary.to_date>NOW()
	AND title.to_date=DATE(99990101)
GROUP BY title.title HAVING avgs >= 60000
ORDER BY avgs DESC;

-- TRUNCATE(정수위치 까지 구하고 나머지는 버림), CAST(데이터 형식 변환 함수), FLOOR(내림), FORMAT(숫자에 ','를 넣어주고, 소수점 자릿수 까지 표현)

10. 성별이 여자인 사원들의 직급별 사원수를 출력해 주세요.
SELECT title.title, emp.gender, COUNT(emp.gender)
FROM employees emp
	INNER JOIN titles title
		ON emp.emp_no = title.emp_no
WHERE emp.gender='F'
GROUP BY title.title;

SELECT ti.title, COUNT(*) cnt
FROM employees emp
	INNER JOIN titles ti
		ON emp.emp_no = ti.emp_no
WHERE emp.gender='f'
	AND ti.to_date = DATE(99990101)
GROUP BY ti.title;

11. 직급별 퇴사한 남자사원수
SELECT A.gender, COUNT(A.gender) AS cnt
FROM employees A
INNER JOIN (
	SELECT emp_no
	FROM titles
	GROUP BY emp_no
	HAVING MAX(to_date) != DATE('9999-01-01')	
) B
ON A.emp_no = B.emp_no
GROUP BY A.gender;


SELECT title.title, emp.gender, COUNT(emp.gender)
FROM employees emp
	INNER JOIN titles title
		ON emp.emp_no = title.emp_no
WHERE emp.gender='F'AND salary.to_date<NOW()
GROUP BY title.title;

-- 
SELECT *
FROM titles
WHERE to_date<NOW()
GROUP BY emp_no
ORDER BY to_date ASC;

SELECT *
FROM titles
GROUP BY emp_no, to_date;
HAVING

SELECT dept_emp, ROW_NUMBER() OVER(PARTITION BY emp_no ORDER BY to_date DESC)
FROM dept_emp;

PARTITION BY emp_no ORDER BY to_date DESC;

SELECT gender, COUNT(
								SELECT emp.emp_no, emp.gender, MAX(title.from_date), title.to_date
								FROM employees emp
								INNER JOIN titles title
										ON emp.emp_no = title.emp_no
								WHERE title.to_date != DATE(99990101)
								GROUP BY emp_no)
FROM employees emp
	INNER JOIN titles title
		ON emp.emp_no = title.emp_no
WHERE gender='M'
;

11. 직급별 퇴사한 남자사원수
SELECT gender, COUNT(gender)
FROM (SELECT emp.emp_no, emp.gender, title.from_date, MAX(title.to_date)
		FROM employees emp 
		INNER JOIN titles title
			ON emp.emp_no = title.emp_no
		GROUP BY emp.emp_no HAVING MAX(title.to_date) != DATE('9999-01-01'))
WHERE emp.gender='M'
;


SELECT emp.emp_no, emp.gender, title.from_date, MAX(title.to_date)
FROM employees emp
INNER JOIN titles title
	ON emp.emp_no = title.emp_no
GROUP BY emp.emp_no HAVING MAX(title.to_date) != DATE('9999-01-01') AND emp.gender='M'
;

SELECT emp.emp_no, emp.gender, title.from_date, MAX(title.to_date)
FROM employees emp
INNER JOIN titles title
	ON emp.emp_no = title.emp_no
GROUP BY emp_no HAVING MAX(title.to_date) != DATE('9999-01-01') AND emp.gender='F'
;



SELECT emp.emp_no, emp.gender, title.from_date, MAX(title.to_date)
FROM employees emp
FULL OUTER JOIN titles title
	ON emp.emp_no = title.emp_no
GROUP BY emp_no HAVING MAX(title.to_date) != DATE('9999-01-01')
;


-- 재직중인 사원들
SELECT *
FROM employees emp
INNER JOIN (SELECT emp.emp_no, emp.gender, title.from_date, MAX(title.to_date)
				FROM employees emp
					INNER JOIN titles title
						ON emp.emp_no = title.emp_no
				GROUP BY emp_no)
	ON emp.emp_no = title.emp_no
WHERE to_date != DATE(99990101);


SELECT *	
FROM employees emp
	INNER JOIN titles title
	ON emp.emp_no = title.emp_no
WHERE (
								(SELECT emp.emp_no, emp.gender, title.from_date, MAX(title.to_date)
								FROM employees emp
								INNER JOIN titles title
										ON emp.emp_no = title.emp_no
								GROUP BY emp_no);
