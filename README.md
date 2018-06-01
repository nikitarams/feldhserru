# Переделка блока новостей

Имеются два коммита (изменения файла):
1. https://github.com/nikitarams/feldhserru/commit/eb06d0ec4dec93257b0c7099b98c027190f35925
здесь код был "причесан" для лучшей читаемости, чтобы понять структуру вложения элементов

2. https://github.com/nikitarams/feldhserru/commit/8a072d50e3bb84b2c5a444ddc877a74f5254e30c
В этом коммите убран <div class="row"> и закрывающий его тэг для обертки списка новостей справа.
также удален класс col-md-9 

Для правильного отображения контента в соответствии с последним коммитом в разрешении 768 x XXXX необходимо поправить класс
`@media (max-width:768px) {
	.news-item .news-title {
		width:100%;
		margin-top:10px;
	}
	.news-item > [class*="col"]:first-child {
		padding-right:0;
	}
	.news-featured .news-title {
		font-size:16px;
	}
}`

на 

`@media (max-width:768px) {
	.news-item .news-title {
		width:100%;
		margin-top:10px;
	}
	.news-featured .news-title {
		font-size:16px;
	}
}
@media (min-width:768px) {
	.news-item > [class*="col"]:first-child {
		padding-right: 15px;
	}
}`

и убрать 

`.news-item > [class*="col"]:first-child {
	padding-right:13px;
}`
