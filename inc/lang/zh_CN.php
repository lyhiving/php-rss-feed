<?php
// *** LICENSE ***
// oText is free software.
//
// By Fred Nassar (2006) and Timo Van Neerden (since 2010)
// See "LICENSE" file for info.
// *** LICENSE ***

/* ##############################################################################################
   ----------------------------------------- Francais -----------------------------------------*/

$GLOBALS['lang'] = array(
'id'								=> 'cn',

// Navigation
'envoyer' 							=> 'Send',
'preview'							=> 'Preview',
'rechercher' 						=> 'Search',
'succes'							=> 'Success',
'echec'								=> 'Fail',
'annuler'	 						=> '取消',

// Label avec ": "
'label_dp_nom'						=> 'Name: ',
'label_dp_pseudo'					=> 'Pseudo: ',
'label_dp_webpage'					=> 'Website (optionnal): ',
'label_dp_captcha'					=> 'Sum of: ',
'label_dp_email'					=> 'E-mail (optionnal): ',
'label_dp_email_required'			=> 'E-mail: ',

// Mois & jours
'months_fullname'					=> array('January','February','March','April','May','June','July','August','September','October','November','December'),
'months_abbr'						=> array('Jan.','Feb.','Mar','Apr','May','June','July','Aug','Sept','Oct','Nov','Dec'),
'days_abbr'							=> array('Mo','Tu','We','Th','Fr','Sa','Su'),
'days_abbr_narrow'					=> array('L','M','M','J','V','S','D'),
'days_fullname'						=> array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'),
'aujourdhui'						=> '今天',
'hier'								=> 'Yesterday',
'demain'							=> 'Tomorrow',

// Erreurs
'erreurs' 							=> '错误',
'err_contenu' 						=> 'Content is empty',
'err_theme_introuvable'				=> 'Theme file is inreadable, not here or broken.',
'err_comm_auteur'					=> 'Author name is empty',
'err_comm_email'					=> 'Email is not correct',
'err_comm_contenu'					=> 'Comment is empty',
'err_comm_captcha'					=> 'Sum is wrong (use numbers)',
'err_comm_webpage'					=> 'URL is wrong',
'err_comm_article_id'				=> 'Article ID is wrong',
'err_wrong_token'					=> 'Security coin is wrong.',

// Notes
'note_no_article'					=> 'No articles',
'note_no_commentaire'				=> 'No comments',
'note_comment_closed'				=> 'Comments are closed',
'note_no_link'						=> 'No links',

// placeholders
'placeholder_search'				=> 'Search',

// Labels
'label_code' 						=> 'code',
'label_article'						=> 'article',
'label_articles'					=> 'articles',
'label_commentaire'					=> 'comment',
'label_commentaires'				=> 'comments',
'label_precedent'					=> 'Newer entries',
'label_suivant'						=> 'Older entries',

// Chiffres 0 à 9 pour captcha
'chiffres' => array('zero','one','two','three','four','five','six','seven','eight','nine'),


// Navigation
'preferences'					=> '设置',
'connexion' 					=> '登录',
'enregistrer' 					=> '保存',
'valider'	 					=> '提交',
'editer' 						=> 'Edit',
'activer'	 					=> 'Activate',
'desactiver'	 				=> 'Desactivate',
'epingler'						=> 'Pin/Unpin',
'archiver'						=> 'Archive/Unarchive',
'mesarticles' 					=> 'My articles',
'mesliens'	 					=> 'My links',
'mesnotes'	 					=> 'My notes',
'mesabonnements'				=> '我的订阅',
'monagenda'						=> 'My agenda',
'mescontacts'					=> 'My contacts',
'nouveau' 						=> 'New article',
'supprimer' 					=> '删除',
'telecharger' 					=> 'Download',
'deconnexion' 					=> '退出登录',
'oui' 							=> 'Yes',
'non' 							=> 'No',
'ouverts' 						=> 'Open',
'fermes' 						=> 'Closed',
'sur' 							=> 'on',
'ou'							=> 'or',
'label_creee_le'				=> 'created on',
'voir_sur_le_blog'				=> 'See online',
'byte_symbol'					=> 'B',
'using'							=> 'with',
'rendered'						=> 'generated in',
'recherche'						=> 'Search result for',

// Install
'install'						=> '安装',
'install_id'					=> '创建用户名: ',
'install_mdp'					=> '创建新密码: ',
'install_choose_sgdb'			=> '选择数据库类型: ',
'install_err_mysql_usr_empty'	=> 'MySQL Username is empty.',
'install_err_mysql_pss_empty'	=> 'MySQL Password is empty.',
'install_err_mysql_hst_empty'	=> 'MySQL Hostname is empty.',
'install_err_mysql_dba_empty'	=> 'MySQL DB-name is empty',
'install_err_mysql_connect'		=> 'BlogoText is unable to connect to MySQL with these informations.',
'first_titre' 					=> 'My first Blogpost',
'first_edit' 					=> 'Edit me',

// Questions
'question_suppr_article'		=> 'This article and its comments will be deleted!',
'question_suppr_image'			=> 'This image will be deleted!',
'question_suppr_comment'		=> 'This comment will be deleted!',
'question_suppr_contact'		=> 'This contact will be deleted!',
'question_suppr_fichier'		=> 'This file will be deleted!',
'question_suppr_note'			=> 'This note will be deleted!',
'question_suppr_event'			=> 'This event will be deleted!',
'question_quit_page'			=> 'Leaving this page will have your unsaved modifications lost. Ok?',
'question_clean_rss'			=> 'All the read items will be removed from database, OK?',
'question_suppr_feed'			=> 'This feed will be deleted!',
'question_show_past_events'		=> 'Display past events?',
'question_entire_day'			=> 'Entire day?',

// Confirmations
'confirm_article_suppr'			=> 'Article has ben deleted',
'confirm_article_ajout'			=> 'Article has been saved',
'confirm_article_maj'			=> 'Article has been updated',
'confirm_fichier_ajout'			=> 'File has been added',
'confirm_fichier_suppr'			=> 'File has been removed',
'confirm_fichier_edit'			=> 'File infos have been edited',
'confirm_prefs_maj'				=> '设置已保存',
'confirm_comment_ajout'			=> 'Comment has been added',
'confirm_comment_suppr'			=> 'Comment has been deleted',
'confirm_comment_edit'			=> 'Comment has been edited',
'confirm_comment_valid'			=> 'Comment status has been edited',
'confirm_link_ajout'			=> 'Link has been added',
'confirm_link_suppr'			=> 'Link has been removed',
'confirm_link_edit'				=> 'Link has been updated',
'confirm_feed_update'			=> 'The feeds have been updated',
'confirm_feeds_edit'			=> 'The feeds have been edited.',
'confirm_feed_ajout'			=> 'The feed has been added.',
'confirm_feed_clean'			=> 'All old feeds have removed.',
'confirm_note_enregistree'		=> 'Notes have been saved.',
'confirm_agenda_updated'		=> 'Agenda has been updated.',
'confirm_contacts_saved'		=> 'Contacts have been saved.',

// No-confirmation
'error_image_add'				=> 'File could not have been added',
'error_phpajax'					=> 'Some PHP/Ajax Error happened:',
'error_comment_suppr'			=> 'The comment has not been deleted since an error happened.',
'error_comment_valid'			=> 'The status has not been changed since an error happened.',

// Redirections
'retour_liste'					=> '« Articles list',

// Titres des pages
'bienvenue'						=> 'Welcome',
'titre_identification' 			=> 'Identification',
'titre_articles' 				=> 'Your articles',
'titre_ecrire' 					=> 'Write a new article',
'titre_maj' 					=> 'Update an article',
'titre_commentaires' 			=> 'Comments',
'titre_preferences' 			=> 'Seetings',
'titre_fichier'					=> 'Files',
'titre_maintenance'				=> '维护',

// Preferences
'prefs_legend_utilisateur'		=> '账号',
'prefs_legend_apparence'		=> 'Appearance',
'prefs_legend_securite'			=> '安全',
'prefs_legend_langdateheure'	=> '语言，日期和时间',
'prefs_legend_configblog'		=> 'Blog &amp; comments',
'prefs_legend_configlinx'		=> 'Links',
'prefs_legend_configrss'		=> 'RSS 订阅设置',
'prefs_legend_configagenda'		=> 'Agenda',
'pref_auteur'					=> '管理员: ',
'pref_email'					=> '管理员邮箱: ',
'pref_identifiant'				=> '登录名: ',
'pref_mdp'						=> '旧密码: ',
'pref_mdp_nouv'					=> '新密码: ',
'pref_langue'					=> '语言: ',
'pref_nom_site'					=> 'Site name: ',
'pref_keywords'					=> 'Keywords: ',
'pref_format_date'				=> '日期格式: ',
'pref_format_heure'				=> '时间格式: ',
'pref_racine'					=> '博客地址: ',
'pref_nb_maxi'					=> 'Amount of articles on homepage: ',
'pref_nb_list'					=> 'Amount of articles on admin list: ',
'pref_nb_list_com'				=> 'Amount of comments on admin list: ',
'pref_nb_list_linx'				=> 'Amount of links on admin list: ',
'pref_fuseau_horaire'			=> '时区: ',
'pref_comm_BoW_list'			=> 'Comments are visible: ',
'pref_comm_white_list'			=> 'Only after you approved them.',
'pref_comm_black_list'			=> 'As soon as they are submited.',
'pref_automatic_keywords'		=> 'Let BlogoText select keywords: ',
'pref_force_email'				=> 'Email is required to comment: ',
'pref_theme'					=> 'Theme: ',
'pref_categories'				=> 'Use tags for articles: ',
'pref_allow_global_coms'		=> 'Close comments on every article: ',
'pref_all'						=> 'All',
'pref_go_to_maintenance'		=> '进入维护页面: ',
'pref_rss_go_to_imp-export'		=> '使用 OPML 导入/导出设置: ',
'pref_label_bookmark_lien'		=> 'Links sharing bookmarklet: ',
'pref_label_crontab_rss'		=> '设置 "Crontab" 命令进行自动更新: ',
'pref_alert_crontab_rss'		=> 'Add this command to your crontab:',
'pref_linx_dl_auto'				=> 'Automaticaly import shared files?',
'pref_ask_everytime'			=> 'Ask each time',
'pref_check_update'				=> 'Check updates automatically',
'pref_id_format'				=> 'Articles URL format:',
'pref_id_format_ymdhis'			=> 'Date-like: '.date('YmdHis'),
'pref_id_format_rand6'			=> 'Random string: -ebd68b-',
'maintenance_optim'				=> '清理数据库',
'pref_agenda_format'			=> 'Default agenda display',
'pref_agenda_bigmonth'			=> 'Calendar',
'pref_agenda_tasklist'			=> 'Tasklist',
'pref_agenda_ical_link'			=> 'iCal (.ics) links for agenda export:',
'pref_agenda_show_ical_link'	=> 'Display iCal link.',

// placeholders
'placeholder_nom_fichier'		=> 'name',
'placeholder_description'		=> 'description',
'placeholder_titre'				=> 'title',
'placeholder_chapo'				=> 'abstract',
'placeholder_notes'				=> 'notes',
'placeholder_contenu'			=> 'content',
'placeholder_motscle'			=> 'keywords',
'placeholder_folder'			=> 'folder',
'placeholder_tags'				=> 'tags',
'placeholder_url'				=> 'url',

// Notes
'note_no_feed'					=> '没有RSS摘要',
'note_no_feed_entry'			=> '没有RSS条目',
'note_no_notifs'				=> '没有通知',


// page backup
'bak_succes_save'				=> '备份成功',
'maintenance_ask_do_what'		=> '你想操作什么呢?',
'maintenance_export'			=> '导出',
'maintenance_incl_quoi'			=> '您要备份什么？',
'maintenance_import'			=> '导入',
'bak_chooseaction'				=> 'What do you want to do?',
'bak_choosefile'				=> 'Choose a file',
'bak_restor_done'				=> '恢复完成',
'bak_optim_done'				=> 'Cleaning done',
'bak_articles_do'				=> 'Include articles',
'bak_comments_do'				=> 'Include comments from articles',
'bak_links_do'					=> 'Include links',
'bak_notes_do'					=> 'Include notes',
'bak_agenda_do'					=> 'Include agenda',
'bak_number_articles'			=> 'How many articles?',
'bak_combien_images'			=> 'How many files?',
'bak_combien_linx'				=> 'How many links?',
'bak_import_btjson'				=> 'Import a JSON backup from Blogotext',
'bak_import_netscape'			=> 'Import links from a Netscape file',
'bak_import_rssopml'			=> '导入OPML RSS提要列表',
'bak_import_ctctvcf'			=> 'Import a VCF contact lists file',
'bak_export_json'				=> 'Export various data in a JSON file',
'bak_export_netscape'			=> 'Export your links in a HTML bookmark file',
'bak_export_zip'				=> '以zip文件格式导出数据库和其他文件',
'bak_export_opml'				=> '将您的RSS feed导出为OPML文件',
'bak_export_xmln'				=> 'Export your notes in a XML file',
'bak_incl_sqlit'				=> '包含SQLite文件',
'bak_incl_confi'				=> '包括配置文件',
'bak_incl_files'				=> 'Include images and files',
'bak_incl_theme'				=> 'Include theme files',
'bak_opti_miniature'			=> 'Recreate image thumbnails',
'bak_opti_vacuum'				=> '重建/清理数据库',
'bak_opti_recountcomm'			=> 'Rebuilt/Recount articles comments',
'bak_opti_supprreadrss'			=> '删除已读的RSS项',
'bak_dl_fichier'				=> '下载备份文件.',

// page RSS
'rss_label_all_feeds'			=> '全部订阅',
'rss_label_today_feeds'			=> '今天',
'rss_label_favs_feeds'			=> '书签',
'rss_label_refresh'				=> '刷新订阅',
'rss_label_reload'				=> '重新加载',
'rss_label_markasread'			=> '全部标记已读',
'rss_label_unfoldall'			=> '展开全部文章',
'rss_label_addfeed'				=> 'Add a feed',
'rss_label_clean'				=> '清理',
'rss_label_unread'				=> 'Unread',
'rss_label_titre_flux'			=> '订阅标题:',
'rss_label_url_flux'			=> '订阅链接:',
'rss_label_dossier'				=> '设置文件夹（可选） :',
'rss_label_config'				=> 'Edit feed list',
'rss_nothing_here_note'			=> 'Nothing here? Import an OPML file here: ',
'rss_jsalert_new_link'			=> 'RSS/Atom/Feed 订阅链接:',
'rss_jsalert_new_link_folder'	=> '将提要放入文件夹（或留空）:',
'rss_raccourcis_clavier'		=> 'Ctrl + Up =读取上一个条目，Ctrl + Down =读取下一个条目。',
'rss_nouveau_flux'				=> 'new entries.',

// vérifier les mises à jours
'maint_chk_update'				=> 'Updates',
'maint_update_youisgood'		=> 'BlogoText is up to date',
'maint_update_youisbad'			=> 'A new version of BlogoText is available!',
'maint_update_go_dl_it'			=> 'You can download it at:',

// Erreurs
'err_titre' 					=> 'Title is empty',
'err_file_write'				=> 'Can’t create file',
'err_prefs_auteur'				=> 'Author name is empty',
'err_prefs_email'				=> 'Email is incorrect',
'err_prefs_identifiant'			=> 'Username is empty',
'err_prefs_id_mdp'				=> 'To change username, yo have to type your password',
'err_prefs_id_syntaxe'			=> 'The new username can’t contain any \', ", \\, | or = characters.',
'err_prefs_oldmdp'				=> 'Old password is wrong',
'err_prefs_mdp'					=> 'Password must be longer than 6 caracters',
'err_prefs_mdp_weak'			=> 'Password is weak, ok?',
'err_prefs_newmdp'				=> 'To change password, you have to type your old password',
'err_prefs_nbmax'				=> 'Amount of articles is wrong',
'err_prefs_racine'				=> 'You have to give an URL for the blog',
'err_prefs_racine_http'			=> 'URL has to begin with "http://" or "https://"',
'err_prefs_racine_slash'		=> 'URL must end with  "/"',
'err_lien_vide'					=> 'URL is empty',
'err_feed_exists'				=> 'Feed already exists.',
'err_feed_wrong_param'			=> 'Wrong request.',

// Titles - liens
'lien_article'					=> 'See online',
'lien_blog'						=> 'Watch online',
'go_to_pref'					=> 'Go to the settings to change description.',

// Label avec ": "
'label_dp_description'			=> 'Description: ',
'label_dp_type'					=> 'Type (extension): ',
'label_dp_dossier'				=> 'Directory: ',
'label_dp_date'					=> 'Date: ',
'label_dp_dimensions'			=> 'Dimentions: ',
'label_dp_visibilite'			=> 'Visibility: ',
'label_dp_etat'					=> 'Visibility: ',
'label_dp_commentaires'			=> 'Comments: ',
'label_dp_poids'				=> 'Filesize: ',
'label_dp_checksum'				=> 'Sha1: ',
'label_dp_identifiant'			=> 'Username: ',
'label_dp_motdepasse'			=> 'Password: ',

// Modes
'ecrire'						=> 'Edit: ',
'apercu'						=> 'Preview',

// Labels
'label_date'					=> 'Date',
'label_titre'					=> 'Title',
'label_sans_titre'				=> 'No title',
'label_contenu'					=> 'Content',
'label_description'				=> 'Description',
'label_publie'					=> 'Published',
'label_publies'					=> 'Published',
'label_invisible'				=> 'Invisible',
'label_invisibles'				=> 'Invisible',
'label_note_archived'			=> 'Archived notes',
'label_note_ajout'				=> 'Add a note',
'label_feed_ajout'				=> 'Add a feed',
'label_event_ajout'				=> 'Add an event',
'label_add_title'				=> 'Add a title',
'label_add_location'			=> 'Add a location',
'label_add_description'			=> 'Add a description',
'label_feed_new'				=> 'New fedd',
'label_article_derniers'		=> 'Last articles',
'label_comment_derniers'		=> 'Last comments',
'label_link_derniers'			=> 'Last links',
'label_note_derniers'			=> 'Last notes',
'label_fichier_derniers'		=> 'Last files',
'label_link'					=> 'link',
'label_links'					=> 'links',
'label_element'					=> 'element',
'label_elements'				=> '篇文章',
'label_image'					=> 'image',
'label_images'					=> 'images',
'label_feeds'					=> '查看订阅',
'label_feed_entry'				=> 'feed entry',
'label_feed_entrys'				=> 'feed entries',
'label_import-export'			=> '导入/导出',
'label_fichier'					=> 'file',
'label_fichiers'				=> 'files',
'label_note'					=> 'Note',
'label_notes'					=> 'Notes',
'label_agenda'					=> 'Agenda',
'label_event'					=> 'Event',
'label_events'					=> 'Events',
'label_nouv_lien'				=> 'Add a link…',
'label_lien_priv'				=> 'Link is private?',
'label_file_priv'				=> 'File is private?',
'label_stay_logged'				=> '保持登录状态?',
'label_resume'					=> 'Home',
'label_dl_fichier'				=> 'Also import file localy? ',
'label_all_comm_by_author'		=> 'All comments by this author',
'label_planned'					=> 'planned',
'label_contact'					=> 'contact',
'label_contacts'				=> 'contacts',
'label_contacts_all'			=> 'All the contacts',
'label_coordonnees'				=> 'Contact information',
'label_profil'					=> 'Profile',

);