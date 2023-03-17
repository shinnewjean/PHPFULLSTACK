-- 1. 사원의 사원번호, 풀네임, 현재 소속부서명을 출력해 주세요.
	CREATE VIEW TEST_VIEW
	AS
		SELECT emp.emp_no, CONCAT(emp.first_name,' ', emp.last_name) FULLNAME , depa.dept_name
			FROM dept_emp dep
				INNER JOIN employees emp
					ON emp.emp_no = dep.emp_no
				INNER JOIN departments depa
					ON dep.dept_no = depa.dept_no
		WHERE dep.to_date =DATE(99990101)
	; 

SELECT *
FROM test_view;
