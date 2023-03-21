1. DB와 DBMS에 대한 설명으로 틀린 것은? 
	①DB는 다수의 사용자가 공유하여 사용할 목적으로 사용 합니다.
	②DBMS는 SQL을 통해 제어합니다. 
	③DMBS는 DB를 공유하며 사용할 수 있는 환경을 제공하는 소프트웨어입니다.
	④DBMS는 DataBase Management System의 약자입니다.
	⑤최근에는 RDBMS를 사용하지 않습니다. 

2. RDBMS의 구조에 대한설명중 틀린 것은?
	①Table은 데이터를 저장하는 장소 입니다.
	②Column은 Table에서 열을 의미합니다.
	③Recode는 Table에서 행을 의미합니다.
	④Column은 속성명과 속성값으로 구성되어있습니다.
	⑤Column은 중복되는 이름을 가질 수 있습니다.

3. SQL에 대한 설명 중 옳은 것은?
	①관계형 데이터 베이스에서 사용되는 언어입니다.
	②국제 표준화 기구에서 SQL에 대한 표준을 제시하지만 준수하지는 않습니다.
	③표준 SQL은 각 회사 제품의 특성을 모두 포용하지 못합니다.
	④각 DBMS는 제품의 특성을 반영한 SQL을 사용하기도 합니다.
	⑤"에스큐엘" 또는 "시퀄"로 읽습니다.

4. Data Modeling의 절차의 순으로 옳은 것은?
	①개념적 데이터 모델링 - 요구사항 수집 및 분석 - 논리적 데이터 모델링 - 물리적 데이터 모델링
	②요구사항 수집 및 분석 - 개념적 데이터 모델링 - 물리적 데이터 모델링 - 논리적 데이터 모델링
	③요구사항 수집 및 분석 - 개념적 데이터 모델링 - 논리적 데이터 모델링 - 물리적 데이터 모델링
	④요구사항 수집 및 분석 - 논리적 데이터 모델링 - 개념적 데이터 모델링 - 물리적 데이터 모델링
	⑤물리적 데이터 모델링 - 요구사항 수집 및 분석 - 개념적 데이터 모델링 - 논리적 데이터 모델링

5. Data Modeling의 절차에 대한 설명으로 옳은 것은?
	①요구 사항 수집 및 분석 : 고객의 요구를 수집 및 분석하여 ERD를 작성하는 단계입니다.
	②개념적 데이터 모델링 : 피터 첸 표기법으로 ERD를 작성합니다.
	③논리적 데이터 모델링 : 구체화된 데이터 모델을 IE표기법을 통해 ERD로 작성합니다.
	④물리적 데이터 모델링 : 도형과 화살표를 통해 관계를 그림으로 표현합니다.
	⑤프로토 타입 제작 : 고객에세 보여줄 프로토타입을 제작합니다.

6. 정규화에 대한 설명중 옳은 것은?	
	①제 3 정규형 : 2NF를 만족하고, 기본키를 제외한 속성들 간의 이행 종속성이 없어야 합니다.
	②제 1 정규형 : 컬럼의 순서는 상관 있습니다.
	③제 2 정규형 : 1NF를 만족하고, 완전 함수 종속 상태여야 합니다.
	④제 4 정규형 : 제 3 정규형을 만족하고 다치 종속이 없어야 합니다.
	⑤BCNF : 제 4 정규형을 만족하고 모든 결정자가 후보키 집합에 속해야 합니다.

7. 이상현상에 속하는 것이 아닌것은?	
	①삽입 이상
	②조회 이상
	③삭제 이상
	④갱신 이상
	⑤권한 이상

8. Transaction에 대한 설명중 틀린것은?
	①논리적 기능을 수행하기 위한 작업의 단위 입니다.
	②원자성, 일관성, 독립성, 무결성의 성질을 가집니다.
	③COMMIT으로 연산의 결과를 DB에 적용합니다.
	④하나의 트랜잭션은 반드시 철회되거나 완료되어야 합니다.
	⑤ROLLBAK를 통해 연산의 결과를 취소합니다.
	
9. PK와 FK에 대해서 설명해 주세요.

10. 제약 조건의 종류에 대해 적어 주세요.

11. 데이터 베이스 테이블에 대한 검색 성능을 높여주는 기능은 무엇인가요?


---------------------------------------------
--- 이하 샘플용 employees DB를 기준으로 작성해 주세요. ---
---------------------------------------------

12. 사원의 사번, 생일, 풀네임(형식 : "성 이름"), 성별을 출력해 주세요.
SELECT emp_no, birth_date,CONCAT(first_name,' ',last_name) FULLNAME, gender
FROM employees;

13. 가장 많은 월급을 출력해 주세요.
SELECT emp_no,RANK() OVER (ORDER BY salary DESC) RANK,salary
FROM salaries
LIMIT 1;

14. 전체 월급의 평균을 구해주세요.
SELECT AVG(salary) 
FROM salaries;

15. 새로운 사원의 정보를 employees Table에 등록해 주세요.(모든 컬럼 등록 필수, 값은 자유)
INSERT INTO employees VALUES (970811,DATE('19970811'),'Shin','Yujin','F','2022-08-11');

16. [15]번에서 등록한 사원의 성을 "test", 생일을 "1990년 3월 1일"로 변경해 주세요.
UPDATE employees SET first_name='test', birth_date=DATE('19900301') WHERE emp_no=970811;

17. [15]번에서 등록한 사원을 삭제해 주세요.
DELETE FROM employees WHERE emp_no=970811;

18. 사번 10001 사원의 생일과 현재 직급을 출력해 주세요.
SELECT emp.emp_no,emp.birth_date,tit.title
FROM employees emp
	INNER JOIN titles tit
		ON emp.emp_no=tit.emp_no
WHERE emp.emp_no='10001';

19. 아래 정보에 맞게 테이블을 작성해 주세요.
	- 열번호, PK, 데이터타입:숫자
	- 회원번호, UK, 데이터타입:숫자
	- 아이디, NULL불가, 데이터타입:문자열
CREATE TABLE test_table1(
	NUM INT
	,EMP_NO INT
	,ID VARCHAR(30) NOT NULL
	);
ALTER TABLE test_table1
ADD PRIMARY KEY(NUM);
ALTER TABLE test_table1
ADD UNIQUE KEY(EMP_NO);
	

20. [17]번에서 등록한 테이블의 회원번호에 인덱스를 추가해주세요.
CREATE INDEX [970811] ON [employees] ([칼럼1], [칼럼2], [칼럼3] ...)

21. [17]번에서 등록한 테이블을 삭제해 주세요.