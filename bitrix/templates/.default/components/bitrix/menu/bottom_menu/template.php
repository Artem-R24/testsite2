<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="ft_about">
					<h4>О магазине</h4>
					<ul>
						<?foreach($arResult as $arItem):?>
						<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
						<?endforeach;?>
					</ul>
				</div>
<?endif?>