

직책이 "Senior Engineer"일 경우는  "관리자"
그외의 직책은 "팀원"으로 사번하고 분기 결과를 출력해 주세요.
SELECT emp_no,title,
			CASE title
				WHEN 'Senior Engineer' THEN '관리자'
				ELSE '팀원'
			END AS 'K_title'
FROM titles;
