-- no.1 이상이하 between
SELECT 
*
from employees
WHERE emp_no >= 10003
  and emp_no <= 10005;

-- 같은 결과값이지만 속도가 느려서 현업에서는 사용빈도 적음
SELECT 
*
from employees
WHERE emp_no BETWEEN 10003 AND 10005;

-- no.2 or in
SELECT *
FROM  employees
WHERE emp_no = 10001 
   or emp_no = 10005;

-- 같은결과값이지만 대용량 데이터에는 속도가 느림 연산이 추가되어 있기 때문  
SELECT * 
FROM  employees 
WHERE emp_no IN(10001,10005);


-- no.3 like :문자열로 검색하는것(m% m으로 시작하는 문자/m_ m으로 시작하는 두자리의 문자)
-- 생각보다 리소스 많이먹음 실행속도 차이가 많이남
SELECT * 
FROM  employees 
WHERE first_name LIKE('m___');


-- no.4 DISTINCT :중복을 삭제해주는(주의 레코드 단위로 봄 ) 
SELECT DISTINCT emp_no
FROM dept_emp; 

-- no.5 LIMIT :상위 갯수만큼의 값을 가져옴	실헹속도의 문제로 사용빈도 적음
--		  OFFSET: 상위값부터 옵셋
SELECT *
FROM employees
LIMIT 10 OFFSET 4;

-- no.6 order by :정렬과 관련된 함수 ','로 정렬기준 추가 가능 (asc오름차순  desc내림차순)
-- 디폴트값: 데이터 등록 날짜된 순서대로
SELECT *
FROM employees
ORDER BY emp_no ASC;

-- no.7 집계함수(some :더하기, AVG(*) :평균, MIN(*) MAX(*) :최솟값 최댓값, COUNT(*) :갯수를 구하는 함수)
SELECT COUNT(emp_no)
FROM employees
WHERE emp_no = 10001;

SELECT AVG(salary)
FROM salaries;

SELECT MAX(salary)
FROM salaries;

SELECT MIN(salary)
FROM salaries;

-- SELECT SOME(salary)
-- FROM salaries;

-- no.8 그룹으로 묶어서 조회 :
-- GROUP BY 컬럼명 [ HAVINGG 집계함수조건]
SELECT title, COUNT(title)
FROM titles
GROUP BY title HAVING COUNT(title) >=100000;

-- AS :별칭만들기
SELECT emp_no, AVG(salary) AS avg_s
FROM salaries 
GROUP BY emp_no 
HAVING avg_s>=30000 
AND Aavg_s<=50000;

SELECT CONCAT(last_name, ' ', first_name) AS fullname
FROM employees;

-- no.9 서브쿼리 (subQuery) : 쿼리 안에 또다른 쿼리가 있는 형태
SELECT *
FROM dept_manager
WHERE dept_no =
					(
						SELECT dept_no
						FROM dept_manager
						WHERE emp_no = 110344
					);

SELECT *
FROM dept_manager
WHERE emp_no in (
						SELECT emp_no
						FROM dept_manager
						WHERE dept_no = 'd009'
					);

SELECT *
FROM dept_manager
WHERE emp_no = ANY (
						SELECT emp_no
						FROM dept_manager
						WHERE dept_no = 'd009'
					);

-- 지정값을 모두 충족하는 값
SELECT *
FROM dept_manager
WHERE emp_no = ALL (
						SELECT dept_no
						FROM dept_manager
						WHERE emp_no IN (110344, 11105)
					);

-- date 입력
SELECT COUNT(emp_no)
FROM employees
WHERE emp_no IN (
						SELECT emp_no
						FROM employees
						WHERE emp_no IN (
												SELECT emp_no
												FROM titles
												WHERE to_date = (
																		SELECT to_date
																		FROM titles
																		WHERE to_date >= NOW()
																		)
												)
						);










