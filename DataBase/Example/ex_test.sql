SELECT emp_no
												FROM titles
												WHERE to_date = (
																		SELECT to_date
																		FROM titles
																		WHERE to_date >= NOW()
																		)