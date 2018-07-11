# Переделка шапки главной страницы

Вот здесь - [видео](https://drive.google.com/file/d/1MF3pwrmBN90tYdw9BzrU1JYozRfRd8Iq/view)

1. Правим файл background0.css
	стираем body{background-image:url(/newsite/images/fon/fon0.png);}
2. Правим файл 	template_ad0e78472515602e338156b35e2c0f0a.css

Можно просто скопировать тот файл который лежит в репозитории на Git

или

добавить 
```
@media only screen and (max-width: 768px) {
	body {
		background: white;
		background-image: none;
	}
}

@media only screen and (min-width: 769px) {
	body {
		background-image:url(/newsite/images/fon/fon0.png);
	}
}

@media(max-width:768px){
	.bg-header{
		height:auto;
	}
	.navbar-white{
		display: none;
	}
	.header-button{
		top:0;
	}	
}

@media(max-width:768px){
	.navbar {
		margin: 15px 0 0 0;
	}
}
	


.bg-header
/* background: url(/newsite/images/header-480.png) center center no-repeat; 
    height: 90px; */
    width: 100%;
    z-index: 99;
	
	
	/*
	.header-button .btn {
		display: inline-block;
		font-size: 12px;
		color: #355987;
		background: inherit;
		border: inherit;
		text-decoration: underline;
	}
	.header-button .btn:before {
		content: '';
		display: inline-block;
		height: 6px;
		width: 6px;
		background: #355987;
		margin-right: 5px;
	}
	.header-button .btn:hover {
		display: inline-block;
		font-size: 12px;
		color: #355987;
		background: inherit;
		border: inherit;
		text-decoration: none;
	}
	*/

   .navbar-nav > li {
    /* float:none !important; */
  }	
  


@media(min-width:992px){
	/*.bg-header{
		height:180px;
	}*/
@media(min-width:720px){
	/*.bg-header {
	  height:95px;
	}*/
@media(min-width:640px){
	/*.bg-header {
	  height: 122px;
	}*/
@media(min-width:600px){
	/*.bg-header {
	  height:110px;
	}*/
@media(min-width:530px){
	/*.bg-header {
	  background:url('/newsite/images/header-980.png') center center no-repeat;
	  height: 104px;
	}*/
@media(min-width:480px){
	/*.bg-header {
		height:101px;
	}*
@media(min-width:410px){
	/*.bg-header {
	  height:92px;
	}*/
@media(min-width:360px){
	/*.bg-header {
	  height: 88px;
	}*/

	.navbar-toggle {
		/*margin-top: -4px;*/
		margin: 0;
	}
	.header-button {
		position: relative;
		/*top: -5px;*/
	}

	
.navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
  background-color:#355987; 
  
  -> 
  
  border-radius: 50%;
  background-color: #d9534f;	
}


.navbar-toggle {
  -moz-border-radius:2px;
  -webkit-border-radius:2px;
  border-radius: 2%; -> border-radius: 50%;
  background-color:#355987; ->background-color: #d9534f;
  padding:5px 10px;
}
```

3. HTML


3.1. Убрать 


```
<div class="topbar"><div class="logo-img"><a href="/"></a></div</div>
```

3.2. Переставнока элементов #1

```
<div class="navbar-header">...</div> 
	включить в 
<div class="row">
	<div class="col-xs-10 col-md-2 col-lg-1">...</div>
	<div class="navbar-header">...</div> 
	...
</div>
```

3.3. Замена содержимого
	
```
<div class="col-md-2 col-lg-1">
		...
</div>
```
на
```	
<div class="col-xs-10 col-md-2 col-lg-1">
	<div class="header-button">
		<a href="http://forum.feldsher.ru/" class="btn btn-danger col-xs-5 col-sm-5" target="_blank">Форум</a>
		<a href="/dispetcher/reg/" class="btn btn-primary col-xs-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-0 col-lg-offset-0 col-sm-6">Отдел кадров</a>
	</div>
</div>
```

3.4. Замена содержимого
	
```
<div class="navbar-header">...</div> 
```
на
```	
<div class="navbar-header col-xs-2 hidden-md hidden-lg text-center">
	<div style="display: inline-block;">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
			<span class="sr-only">Меню</span>
			<i class="fa fa-plus"></i>
		</button>
	</div>
</div>
```

	