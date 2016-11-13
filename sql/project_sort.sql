SELECT 
	 id, userid_fk, title, idea, video, thumbs_up, thumbs_down, likes, commentid_fk, created
FROM
	project
ORDER BY
	LOG10(ABS((thumbs_up - thumbs_down) + 1) * SIGN(thumbs_up - thumbs_down)) + likes
	+ (UNIX_TIMESTAMP(created) / 300000) DESC
LIMIT 20