DELIMITER $$
	CREATE TRIGGER TEST_UPDATE
	AFTER UPDATE -- 실행시기와 작업 선택
	ON departments -- 트리거를 부착할 테이블
	FOR EACH ROW -- 아래 나올 조건에 해당하는 모든 row에 적용
	BEGIN -- 트리거시 실행되는 코드
			UPDATE departments
			SET dept_name = 'trigger test'
			WHERE dept_no = 'd010';
	END $$
	DELIMITER ;

UPDATE departments
SET dept_name='update test'
WHERE dept_no = 'd010';

-- DELETE TRIGGERS;