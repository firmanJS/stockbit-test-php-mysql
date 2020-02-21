SELECT a.ID,
       a.UserName,
  (SELECT b.UserName
   FROM USER b WHERE b.ID = a.Parent) AS ParentUserName
FROM USER a