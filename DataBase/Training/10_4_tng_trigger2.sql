	DELIMITER $$
	CREATE TRIGGER 트리거명
	{BEFORE | AFTER} {INSERT | UPDATE| DELETE } -- 실행시기와 작업 선택
	ON departments -- 트리거를 부착할 테이블
	FOR EACH ROW -- 아래 나올 조건에 해당하는 모든 row에 적용
	BEGIN-- 트리거시 실행되는 코드
		UPDATE titles
		SET title LIKE '%trigger_'
		WHERE emp_no = '10001';
	END IF;
	END $$
	DELIMITER ;