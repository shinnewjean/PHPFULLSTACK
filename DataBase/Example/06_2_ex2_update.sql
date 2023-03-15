-- UPDATE의 기본구조
-- UPDATE 테이블명
-- SET ( 컬럼1 = 값1, 컬럼2 = 값2 )
-- WHERE 조건
-- ** 추가설명 : 조건을 적지않을 경우 모든 레코드가 수정됩니다.
--				실수를 방지하기위해 WHERE절을 먼저 작성하고 SET절을 작성하는 것을 추천드립니다.

UPDATE departments
SET dept_name = '2000'
WHERE dept_no = 'd001' OR dept_no = 'd002';

SELECT *
FROM departments;

SELECT *
FROM departments
WHERE dept_no = 'd001';

ROLLBACK;

UPDATE employees
SET first_name = '신', last_name = 'NEW JEAN',birth_date=DATE(19970811),hire_date='2023-03-16'
WHERE emp_no = 500000;

SELECT *
FROM employees;

-- COMMIT;