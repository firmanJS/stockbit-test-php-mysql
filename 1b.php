<?php

function fixThisSearchBlogCode ($keyword='', $category='', $startdate='', $enddate='', $author=''){

    $sql = 'SELECT COUNT(*) FROM tbl_blog';
    
    $where = 'WHERE';
    if($keyword) $where .= ' keyword='.$keyword;
    if($category) $where .= ' AND category='.$category;
    if($startdate) $where .= ' AND startdate='.$startdate;
    if($enddate) $where .= ' AND enddate='.$enddate;
    if($author) $where .= ' AND author='.$author;
    
    $DB = new mysqli('localhost', 'root', '', 'test');
    $result = $DB->query($sql);
    printf("Select returned %d rows.\n", $result->num_rows);
    $result->close(); 
}

echo fixThisSearchBlogCode();