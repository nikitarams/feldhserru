<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if(!empty($arResult["ITEMS"])):?>
	<div class="row">
		<?$count = count($arResult["ITEMS"]) - 1; $k = 0;
		foreach($arResult["ITEMS"] as $cell=>$arItem):

			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_TPL_ELEMENT_DELETE_CONFIRM')));

			$productTitle = (
				isset($arItem['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'])&& $arItem['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'] != ''
				? $arItem['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']
				: $arItem['NAME']
			);
			
			if(!empty($arItem["PROPERTIES"]["SMALL_NAME"]["VALUE"]))
				$productTitle = $arItem["PROPERTIES"]["SMALL_NAME"]["VALUE"];
			
			$imgTitle = (
				isset($arItem['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_TITLE']) && $arItem['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_TITLE'] != ''
				? $arItem['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_TITLE']
				: $arItem['NAME']
			);?>
			<?if($cell < 1):?>
				<div class="col-md-4">
					<div class="news-item news-featured">
						<?if(!empty($arItem["PROPERTIES"]["PREVIEW_VIDEO"]["VALUE"]) && !empty($arItem["PROPERTIES"]["HREF_VIDEO"]["VALUE"])):?>
							<div class="embed-responsive embed-responsive-<?=($arItem["PROPERTIES"]["FORMAT_VIDEO"]["VALUE"]?$arItem["PROPERTIES"]["FORMAT_VIDEO"]["VALUE"]:"16by9")?>">
								<iframe class="embed-responsive-item" src="<?=$arItem["PROPERTIES"]["HREF_VIDEO"]["VALUE"]?>?rel=0&hd=1&showinfo=0&color=white&html5=1" allowfullscreen></iframe>
							</div>
						<?elseif(!empty($arItem["PREVIEW_PICTURE"])):?>
							<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$imgTitle?>"></a>
						<?endif?>
							<h3 class="news-title"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$productTitle?></a></h3>
						<?if(!empty($arItem["PREVIEW_TEXT"])):?><div><i><?=$arItem["PREVIEW_TEXT"]?></i></div><?endif?>
							<div class="news-meta">
								<span class="news-comment-count fa fa-commenting-o pull-right"><?=$arItem["FORUM_MESSAGE_CNT"]?></span>
								<span class="news-comment-count fa fa-eye pull-right"><?=$arItem["SHOW_COUNTER"]?></span>
								<span class="news-comment-count fa fa-calendar pull-right"> <?=$arItem["DISPLAY_ACTIVE_FROM"]?></span>									
							</div>
					</div>
				</div>
			<?else:?>
				<?if($k < 1):?>
					<div class="col-md-8">
				<?endif?>
						<div class="news-item clearfix">
							<?if(!empty($arItem["PROPERTIES"]["PREVIEW_VIDEO"]["VALUE"]) && !empty($arItem["PROPERTIES"]["HREF_VIDEO"]["VALUE"])):?>
								<div class="col-sm-5">
									<div class="embed-responsive embed-responsive-<?=$arItem["PROPERTIES"]["FORMAT_VIDEO"]["VALUE"]?>">
										<iframe class="embed-responsive-item" src="<?=$arItem["PROPERTIES"]["HREF_VIDEO"]["VALUE"]?>?rel=0&hd=1&showinfo=0&color=white&html5=1" allowfullscreen></iframe>
									</div>
								</div>
								<div class="col-sm-7">
							<?elseif(!empty($arItem["PREVIEW_PICTURE"])):?>
								<div class="col-sm-3">
									<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img style="width:100%" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$imgTitle?>"></a>
								</div>
								<div style="padding-top:0">
							<?else:?>
								<div class="col-sm-12">
							<?endif?>
								<h3 class="news-title"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$productTitle?></a></h3>
								<?if(!empty($arItem["PREVIEW_TEXT"])):?><p><?=$arItem["PREVIEW_TEXT"]?></p><?endif?>								
								<div class="news-meta">
									<span class="news-comment-count fa fa-commenting-o pull-right"><?=$arItem["FORUM_MESSAGE_CNT"]?></span>
									<span class="news-comment-count fa fa-eye pull-right"><?=$arItem["SHOW_COUNTER"]?></span>
									<span class="news-comment-count fa fa-calendar pull-right"> <?=$arItem["DISPLAY_ACTIVE_FROM"]?></span>
								</div>
							</div>
						</div>
				<?$k++;
				<?if($count == $k):?>
					</div>
				<?endif?>
			<?endif?>
		<?endforeach?>
	</div>
<?endif?>
