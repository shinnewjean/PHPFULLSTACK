-- 1. 데이터 베이스 제약조건 이란?
-- 	- 데이터의 무결성을 지키기위한 규칙입니다.
-- 	- 테이블을 수정 작업하는 경우 잘못된 트랜잭션 수행을 방지합니다.
-- 	- 테이블 간 제약조건이 있어서 종속성이 있는 경우 테이블 삭제를 방지합니다.

-- 2. 제약 조건의 종류
-- 	- primary Key(PK)
-- 		> 테이블 생성 시 고유의 단 한 개의 PK설정합니다.
-- 		> 중복 불가, NULL(존재하지 않는값) 불가합니다.
-- 		> 고유 인덱스를 자동으로 생성합니다.
-- 		> 여러 컬럼을 하나의 PK로 생성 가능합니다.

-- 	- Foreign Key(FK)
-- 		> 한 테이블을 다른 테이블과 연결해주는 역할을 합니다.
-- 		> 테이블 간의 잘못된 매핑을 방지하는 역할도 합니다.
-- 		> FK를 선언한 테이블이 하위 테이블이 됩니다.
-- 		> 참조하는 컬럼의 데이터 타입이 일치해야하며, PK와 Unique만 참조가 가능합니다.
-- 		> 테이블 동작의 종류
-- 			>> ON DELETE + 동작
-- 				참조되는 테이블의 값이 삭제될 경우의 동작
-- 			>> ON UPDATE + 동작
-- 				참조되는 테이블의 값이 수정될 경우의 동작
-- 			>> 이하 설정할 수 있는 동작
-- 				CASCADE : 참조하는 테이블에서도 삭제와 수정이 같이 이루어집니다.
-- 				SET NULL : 참조하는 테이블의 데이터는 NULL로 변경됩니다.
-- 				NO ACTION : 참조하는 테이블의 데이터는 변경되지 않습니다.
-- 				SET DEFAULT : 참조하는 테이블의 데이터는 필드의 기본값으로 설정됩니다.
-- 				RESTRICT : 참조하는 테이블에 데이터가 남아 있으면, 참조되는 테이블의 데이터를 삭제하거나 수정할 수 없습니다.

-- 	- UNIQUE
-- 		> 고유키입니다.
-- 		> 중복된 값을 허용하지 않지만, 여러 개 NULL값을 허용합니다.
-- 		> 고유 인데스를 자동 생성합니다.
	
-- 	- NULL / NOT NULL
-- 		> 해당 컬럼의 NULL 값 허용 여부를 설정합니다.

-- 	- DEFAULT
-- 		> 해당 컬럼에 기본값을 설정합니다.

-- 	- CHECK
-- 		> 데이터의 점검을 하는 제약조건 입니다.

-- -----------------------------------------------------------------------

-- 1.  테이블 생성
-- CREATE TABLE 테이블명(
-- 	컬럼 타입(크기) NOT NULL --널값이 들어갈 수 없음
-- 	,컬럼 타입 DEFAULT(값) --초기값 지정
-- 	,CONSTRAIN PK명 PRIMARY KEY(컬럼) --PK설정
-- 	,CONSTRAIN FK명 FOREIGN KEY(컬럼)
-- 		REFERENCE 참조테이블(참조컬럼) [ON DELETE 동작 / ON UPDATE 동작]  -- FK설정
-- 	,CONSTRAIN UNIQUE명 UNIQUE (컬럼) -- UNIQUE설정
-- 	,CONSTRAIN CHECK명 CHECK (조건) -- CHECK설정
-- );

-- 한글은 3바이트/ 문지열의 바이트수입력:CHAR()
--	,MEM_SEX CHAR(1) 
-- DATE DATETIME 용량의 차
이
.-- 쿼리로 테이블 만든 이유: 리눅스배경이라서
CREATE TABLE TEST_TBL(
	MEM_NO INT(5)
	,MEM_NAME VARCHAR(50) NOT NULL
	,MEM_AGE INT(3) NOT NULL
	,MEM_SEX ENUM('F','M')
	,MEM_SIGNIN_DATE DATETIME NOT NULL
	,MEM_SIGNOUT_DATE DATETIME
	,CONSTRAINT PK_EMPLOYEES_MEM_NO PRIMARY KEY(MEM_NO)
);

-- 알터 테이블 : 하나의 컬럼만 추가적으로 진행하는  경우 

-- 2. 테이블 변경
-- 	- 컬럼 추가
-- 		ALTER TABLE 테이블명 ADD COLUMN 컬럼 데이터타입;
ALTER TABLE TEST_TBL ADD COLUMN ADDR1 VARCHAR(300);

-- 	- 컬럼의 데이터타입 변경
-- 		ALTER TABLE 테이블명 ALTER COLUMN 컬럼 데이터타입;
ALTER TABLE TEST_TBL ALTER COLUMN ADDR1 VARCHAR(200);

-- 	- 컬럼 삭제
-- 		ALTER TABLE 테이블명 DROP COLUMN 컬럼;
ALTER TABLE TEST_TBL DROP COLUMN ADDR1;

SHOW FULL COLUMNS FROM test_tbl;

-- 데이터 넣기
INSERT INTO TEST_TBL(
	MEM_NO
	,MEM_NAME
	,MEM_AGE
	,MEM_SEX
	,MEM_SIGNIN_DATE
	,MEM_SIGNOUT_DATE
)
VALUES (
	2
	,'박병주'
	,34
	,'M'
	,NOW()
	,NULL
)

SELECT *
FROM test_tbl;

-- COMMIT;

-- DBMS 어디에 존재/ 복구가능
-- DELETE FROM test_tbl;

-- ROLLBACK;

-- 3. 테이블 삭제
-- 	DROP TABLE 테이블1 [, 테이블2, 테이블3 ...];
-- DROP TABLE test_tbl;


-- 4. 테이블의 데이터 삭제
-- 	TRUNCATE TABLE 테이블;
-- DDL 쿼리 /DBMS 어디에도 존재 하지않음
-- TRUNCATE TABLE test_tbl; 
