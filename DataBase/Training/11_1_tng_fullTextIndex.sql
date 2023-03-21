CREATE TABLE test_text(
	txt_no INT PRIMARY KEY AUTO_INCREMENT
	,f_text VARCHAR(4000) 
);

CREATE FULLTEXT INDEX idx_test_text ON test_text(f_text);

INSERT INTO test_text(f_text) VALUES('동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라만세');
INSERT INTO test_text(f_text) VALUES('무궁화 삼천리 화려강산 대한사람 대한으로 길이보전하세');
INSERT INTO test_text(f_text) VALUES('남산 위에 저소나무 철갑을 두른듯 바람서리 불변함을 우리기상일세');
INSERT INTO test_text(f_text) VALUES('가을하늘 공활한데 높고 구름없이 바람서리 불변함을 우리 기상일세');
INSERT INTO test_text(f_text) VALUES('이기상과 이맘으로 충성을 다하여 괴로우나 즐거우나 나라사랑일세');

COMMIT;

SELECT * FROM test_text
WHERE MATCH(f_text) AGAINST('동해물과 백두산이');