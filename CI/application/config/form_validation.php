<?php 

$config = array (
		'add_article_rules' => array(
		
									array(
										'field' => 'title',
										'label' => 'Article Title',
										'rules' => 'required'
									),
									array(
										'field' => 'body',
										'label' => 'Article body',
										'rules' => 'required'
									)
		
		
							),
		'admin_login' => array(
									array(
										'field' => 'username',
										'label' => 'User Name',
										'rules' => 'required|alpha|trim'
									),
									array(
										'field' => 'password',
										'label' => 'Password',
										'rules' => 'required'
									)
						)	
						
);		