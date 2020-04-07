<div class="list-menu pull-left col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="widget" style="margin: 0px; min-height: 0px;">
        <p>Danh mục sản phẩm</p>
        <ul class="main-ul">
    	<?php foreach($data as $rows): ?>
        <li>
        	<a href="index.php?controller=products&action=categories&catid=<?php echo $rows->id; ?>" title="<?php echo $rows->name; ?>"><?php echo $rows->name; ?><i class="fa fa-angle-right pull-right" aria-hidden="true"></i></a>
            <ul class="sub">
            	<?php
	                //lay cac danh muc cap con
                    $subCategory = DB::fetchAll("SELECT * FROM categories WHERE parent_id = ".$rows->id." ORDER BY id");
                    foreach($subCategory as $subRows):
	            ?>
                <li>
                	<a href="index.php?controller=products&action=categories&catid=<?php echo $subRows->id; ?>" title="<?php echo $subRows->name; ?>"><?php echo $subRows->name; ?></a>
                </li>
            	<?php endforeach; ?>
            </ul>
        </li>
    	<?php endforeach ; ?>
    </ul>
    </div>
    
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="widget">
        <p>Sản phẩm khuyến mãi</p>
        <div class="panel-left-body">
        	<?php
		        //sản phẩm khuyến mại hot
		        $data = DB::fetchAll("SELECT * FROM products WHERE hot=1 ORDER BY id DESC LIMIT 0,5");
	    	?>
	    	<?php foreach ($data as $rows) : ?>
	            <div id="post-list-footer" class="sidebar_menu">
	                <div class="promotion clearfix">
	                    <div class="promotion-image">
	                        <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>">
	                            <img src="assets/upload/products/<?php echo $rows->photo; ?>">
	                        </a>
	                    </div>
	                    <div class="promotion-info" style="width:194px;">
	                        <div class="promotion-title">
	                            <a class="ws-nw overflow ellipsis" href="" title=""><?php echo $rows->name; ?></a>
	                        </div>
	                        <ul class="promotion-price">
	                            <li class="color">
	                                <ins>
	                                	<?php
	                                		if($rows->discount > 0)
	                                		{
	                                			$newPrice = ($rows->price * $rows->discount)/100;
	                                			echo number_format($rows->price - $newPrice,0,',','.');
	                                		}
	                                		else
	                                		{
	                                			echo number_format($rows->price,0,',','.');
	                                		}
	                                	?>₫</ins>
	                                <del><?php echo number_format($rows->price,0,',','.'); ?>₫</del>
	                            </li>
	                        </ul>
	                    </div>
	                </div>
	            </div>
        	<?php endforeach ; ?>
        </div>
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
    <div class="widget">
        <p><i class="fa fa-search"></i> Tìm theo khoảng giá</p>
        <div class="panel-left-body">
            <ul class="list-group" style="border:0px;font-size: 12px;">
	            <li class="list-group-item" style="border:0px;">
	                <input type="radio" checked id="findGroupPrice1" name="findGroupPrice" value="1tr-5tr" />&nbsp;Giá từ 1 triệu - dưới 5 triệu
	            </li>
	            <li class="list-group-item" style="border:0px;">
	                <input type="radio" id="findGroupPrice2" name="findGroupPrice" value="5tr-10tr" />&nbsp;Giá từ 5 triệu - dưới 10 triệu
	            </li>
	            <li class="list-group-item" style="border:0px;">
	                <input type="radio" id="findGroupPrice3" name="findGroupPrice" value="10tr-15tr" />&nbsp;Giá từ 10 triệu - dưới 15 triệu
	            </li>
	            <li class="list-group-item" style="border:0px;">
	                <input type="radio" id="findGroupPrice4" name="findGroupPrice" value="15tr-20tr" />&nbsp;Giá từ 15 triệu - dưới 20 triệu
	            </li>
	            <li class="list-group-item" style="border:0px;">
	                <input type="radio" id="findGroupPrice5" name="findGroupPrice" value="20tr-25tr" />&nbsp;Giá từ 20 triệu - dưới 25 triệu
	            </li>
	            <li class="list-group-item" style="border:0px;">
	                <input type="radio" id="findGroupPrice6" name="findGroupPrice" value="25tr-30tr" />&nbsp;Giá từ 25 triệu - dưới 30 triệu
	            </li>
	            <li class="list-group-item" style="border:0px; text-align:center">
	                <input type="button" class="btn btn-success" value="Tìm kiếm" onclick="searchPrice();" />
	            </li>
	        </ul>
        </div>
        <script type="text/javascript">
	        function searchPrice()
	        {
	            if(document.getElementById("findGroupPrice1").checked == true)
	                location.href="index.php?controller=Search1&fromPrice=1000000&toPrice=5000000";
	            if(document.getElementById("findGroupPrice2").checked == true)
	                location.href="index.php?controller=Search1&fromPrice=5000000&toPrice=10000000";
	            if(document.getElementById("findGroupPrice3").checked == true)
	                location.href="index.php?controller=Search1&fromPrice=10000000&toPrice=15000000";
	            if(document.getElementById("findGroupPrice4").checked == true)
	                location.href="index.php?controller=Search1&fromPrice=15000000&toPrice=20000000";
	            if(document.getElementById("findGroupPrice5").checked == true)
	                location.href="index.php?controller=Search1&fromPrice=20000000&toPrice=25000000";
	            if(document.getElementById("findGroupPrice5").checked == true)
	                location.href="index.php?controller=Search1&fromPrice=25000000&toPrice=30000000";
	        }
	    </script>
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
    <div class="widget">
        <p><i class="fa fa-search"></i> Tìm theo mức giá</p>
        <div class="panel-left-body">
            <ul class="list-group" style="border:0px;">
	            <li class="list-group-item" style="border:0px;">Giá từ &nbsp;&nbsp; <input type="number" min="0" value="0" id="fromPrice" /></li>
	            <li class="list-group-item" style="border:0px;">Đến &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="number" min="0" value="0" id="toPrice" /></li>
	            <li class="list-group-item" style="border:0px; text-align:center">
	            <input type="button" class="btn btn-success" value="Tìm kiếm" onclick="location.href = 'index.php?controller=Search1&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
	            </li>
	        </ul>
        </div>
    </div>
</div>