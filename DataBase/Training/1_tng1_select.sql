-- 1.직책 테이블의 모든정보를 조회해주세요
	SELECT * from titles;
	
-- 2.급여가 60,000 이하인 사원의 사번을 조회해 주세요.
	SELECT emp_no from salaries WHERE salary<=60000;
	
-- 영역잡고 컨트롤 쉬프트 f9

-- 3.급여가 60,000에사 70,000인 사원의 사번을 조회해 주세요.
	SELECT emp_no from salaries WHERE salary>=60000 and salary<=70000;
	
-- 4.사원번호가 10001, 10005인 사원의 모든 정보를 조회해 주세요.
SELECT * FROM  employees WHERE emp_no = 10001 or emp_no = 10005;
SELECT * FROM  employees WHERE emp_no IN(10001,10005);

-- 5.직급명에 "Engineer"가 포함된 사원의 사번과 직급을 조회해 주세요.
SELECT emp_no, title FROM  titles WHERE title LIKE('%Engineer%');

-- 6.사원 이름을 오름차순으로 정렬해서 조회해 주세요.
SELECT * FROM employees ORDER BY first_name, last_name;
SELECT * FROM employees ORDER BY first_name ASC,last_name DESC;
SELECT * FROM employees ORDER BY first_name, last_name DESC;

-- 7.사원별 급여의 평균을 조회해 주새요.
SELECT emp_no, AVG(salary) FROM salaries GROUP BY emp_no;

-- 8.사원별 급여 평균이 30,000~50,000인 사원번호와 급여평균
-- AS 별칭 만들기
SELECT emp_no, AVG(salary) AS avg_s
FROM salaries 
GROUP BY emp_no 
HAVING avg_s>=30000 
AND Aavg_s<=50000;

SELECT emp_no, AVG(salary) FROM salaries GROUP BY emp_no HAVING AVG(salary)>=30000 AND AVG(salary)<=50000 ORDER BY AVG(salary) ASC;
SELECT emp_no, AVG(salary) FROM salaries GROUP BY emp_no HAVING AVG(salary) BETWEEN 30000 AND 50000 ORDER BY AVG(salary) ASC;


-- 9.사원별 급여 평균이  70,000 이상인 사원의 사번, 이름, 성, 성별을 조회해 주세요.
SELECT CONCAT('No. ',emp_no) AS 사원번호, CONCAT(first_name,' ', last_name) AS fullname ,gender
FROM employees
WHERE emp_no in (
						SELECT emp_no
						FROM salaries
						GROUP BY emp_no
						HAVING AVG(salary)>=70000
					);

SELECT emp_no, first_name, last_name) AS fullname ,gender
FROM employees
WHERE emp_no =any (
						SELECT emp_no
						FROM salaries
						GROUP BY emp_no
						HAVING AVG(salary)>=70000
					);
					
-- 10. 현재 직책이 "Senior Engineer"인 사원의 사원번호와 성을 조회해 주세요.
SELECT emp_no, last_name
FROM employees
WHERE emp_no in (	SELECT emp_no
						FROM titles
						WHERE to_date >= NOW()
						AND title = "Senior Engineer"
					);					
					
					
					
					
					