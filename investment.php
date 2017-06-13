<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
    </head>
    <body>
    	<div class="wrapper">
            <?php require_once('components/social-media.html'); ?>
    		<div class="main-container">
    			<?php require_once('components/header.html'); ?>

                <div class="content">
                    <div class="content-banner">
                        <img src="img/franchise-banner.png" style="position:relative;top:10px;">
                    </div>
                    <?php require_once('components/left-navigation-franchise.html'); ?>
                    <div class="menu-content faqs">
                        <p><span style="text-transform:uppercase;font-weight:700;font-size:16px;color:#00447C;">Investment</span></p>

                        <table class="investment-table" style="margin-bottom:15px;">
                            <tr>
                                <th>Description</th>
                                <th style="border-left:1px solid #fff;">Cost</th>
                            </tr>
                            <tr>
                                <td class="description">Franchise Fee</td>
                                <td class="cost">$45,000</td>
                            </tr>
                            <tr>
                                <td class="description">Collateral Assets</td>
                                <td class="cost">$650,000 - $913,000</td>
                            </tr>
                            <tr>
                                <td class="description">Soft Costs</td>
                                <td class="cost">$77,500 - $135,286</td>
                            </tr>
                            <tr>
                                <th style="background:rgba(0,68,124,.8);">Total</th>
                                <th style="border-left:1px solid #fff;background:rgba(0,68,124,.8);">$772,500 - $1,093,286</th>
                            </tr>
                        </table>

                        <ol style="padding-left:0;">
                            <li><span style="color:#00447C;">1. </span>The range in investment cost is largely dependent on the total square footage of a given location. </li>
                            <li><span style="color:#00447C;">2. </span>"Landlord Inducements" (sometimes referred to as "Tenant Inducements") may be available in certain cases to reduce capital expenditures required for infrastructure.</li>
                            <li><span style="color:#00447C;">3. </span>"Collateral Assets" are assets that may be used to secure financing from Chartered Canadian Banks and other financial institutions. These items include furniture, equipment, millwork, signage, audio-visual and Point of Sale equipment as well as Leasehold Improvements.</li>
                            <li><span style="color:#00447C;">4. </span>"Soft costs" are other assets or pre-opening expenditures that are not eligible for commercial lending purposes. These items include professional fees, inventories, merchandise, prepaid expenses, rent and utilities deposits, pre-opening staff training, pre-opening advertising, etc. </li>
                        </ol>

                        <p>You should be aware that there are some exciting locations available that could potentially cut the investment number by as much as one-third (&frac13;) to one-half (&frac12;) . These locations are existing restaurants (but not AllStar locations) that – for whatever reason – are not or have not done well for their existing owners. Sometimes it’s the right owner in the wrong restaurant concept; or the right restaurant concept with a weak operator. Regardless of the cause, we believe the location works for our concept and presents an opportunity for the right AllStar franchisee to cut their initial investment significantly. We estimate that the total refurbishment cost will be between $600K to $800K – depending on the specific location. The unencumbered cash investment on your part will therefore be between $300K to $400K. As you will see from the attached AllStar Franchise Information Package, this is significantly less than opening an AllStar location in a “shell” site. We cannot get into any more specifics at this stage due to the confidentiality associated with this competitive information</p>
                    </div>
                </div>
    		</div>
    	</div>
    </body>
    <?php require_once('components/footer.html'); ?>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('.franchise').addClass('selected');
        $('.investment').addClass('selected');
    </script>
</html>