<?php include 'headerlo.php'?>
<?php
// Count how many people visited site
$handle = fopen("counter.txt", "r");
if(!$handle) {
    echo "could not open the file";
} else {
    $counter =(int )fread($handle,20);
        fclose($handle);
        $counter++;
    $handle = fopen("counter.txt", "w" );
    
    fwrite($handle,$counter);
    fclose ($handle);
}
?>
  
<div id="BodyWrapper">
            <div id="Body" style="">
                
   <div id="CatalogContainer">
        

<div style="width: 876px; height: 28px; clear: both; display: block; background-color: #006699;" class="StandardBox">
    <table width="876px" border="0">
        <tr>
            <td style="font-family: Verdana, Helvetica, Sans-Serif; font-size: 12pt; color: Black; font-weight: bold; width: 200px; text-align: left;">
                Catalog
            </td>
            <td style="width: 660px; text-align: right;">
                <input type="hidden" name="ctl00$cphRoblox$rbxCatalog$UserIDHiddenField" id="ctl00_cphRoblox_rbxCatalog_UserIDHiddenField"/>
                <input name="ctl00$cphRoblox$rbxCatalog$SearchTextBox" type="text" maxlength="100" id="ctl00_cphRoblox_rbxCatalog_SearchTextBox" style="width: 515px;"/>
                <input type="submit" name="ctl00$cphRoblox$rbxCatalog$SearchButton" value="Search" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$rbxCatalog$SearchButton&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="ctl00_cphRoblox_rbxCatalog_SearchButton"/>
                <input type="submit" name="ctl00$cphRoblox$rbxCatalog$ResetSearchButton" value="Reset" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$rbxCatalog$ResetSearchButton&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="ctl00_cphRoblox_rbxCatalog_ResetSearchButton"/>
            </td>
        </tr>
    </table>
</div>

<div class="SearchError">
    
</div>

<div style="float: left; margin-right: 8px">
    <div class="StandardBox" style="width: 185px">
        <div id="BrowseMode">
            <h2><a id="ctl00_cphRoblox_rbxCatalog_CafePressHyperLink" href="https://web.archive.org/web/20120814115621/http://www.cafepress.com/roblox" target="_blank">Buy ROBLOX Stuff!</a></h2><br/>
            <h2><a id="ctl00_cphRoblox_rbxCatalog_CurrencyPurchaseHyperLink" href="Upgrades/Robux.aspx">Buy ROBUX!</a></h2><br/>
            <h2><a id="ctl00_cphRoblox_rbxCatalog_CurrencyExchangeHyperLink" href="Marketplace/TradeCurrency.aspx">Trade Currency!</a></h2><br/>
            
            <h2 style="margin-top:20px;">Browse</h2>
            <ul>
                <li class="Selected">
                    <h3><a id="ctl00_cphRoblox_rbxCatalog_BrowseModeFeaturedSelector" href="Catalog.aspx?m=Featured&amp;q=">ROBLOX Featured</a></h3>
                </li>
                <li class="">
                    <h3><a id="ctl00_cphRoblox_rbxCatalog_BrowseModeTopFavoritesSelector" href="Catalog.aspx?m=TopFavorites&amp;c=8&amp;t=AllTime&amp;d=All&amp;q=">Top Favorites</a></h3>
                </li>
                <li class="">
                    <h3><a id="ctl00_cphRoblox_rbxCatalog_BrowseModeBestSellingSelector" href="Catalog.aspx?m=BestSelling&amp;c=8&amp;t=AllTime&amp;d=All&amp;q=">Best Selling</a></h3>
                </li>
                <li class="">
                    <h3><a id="ctl00_cphRoblox_rbxCatalog_BrowseModeRecentlyUpdatedSelector" href="Catalog.aspx?m=RecentlyUpdated&amp;c=8&amp;q=">Recently Updated</a></h3>
                </li>
                <li class="">
                    <h3><a id="ctl00_cphRoblox_rbxCatalog_BrowseModeForSaleSelector" href="Catalog.aspx?m=ForSale&amp;c=8&amp;d=All&amp;q=&amp;mn=-9223372036854775808&amp;mx=9223372036854775807">For Sale</a></h3>
                </li>
                <li class="">
                    <h3><a id="ctl00_cphRoblox_rbxCatalog_BrowseModePublicDomainSelector" href="Catalog.aspx?m=PublicDomain&amp;c=8&amp;q=">Free Items</a></h3>
                </li>
                <li class="">
                    <h3><a id="ctl00_cphRoblox_rbxCatalog_BrowseModeCollectibleSelector" href="Catalog.aspx?m=Collectible">Collectible</a></h3>
                </li>
                <li visible="" class="">
                    <h3><a id="ctl00_cphRoblox_rbxCatalog_BrowseModeAssetSetsSelector" href="Catalog.aspx?m=AssetSets&amp;q=">Sets</a></h3>
                </li>
            </ul>
        </div>
        
        
        
    </div>
    <br clear="all"/>
    <div class="StandardBox" style="width: 185px;">
        <b style="font-size: 14px; color: #990000">LEGEND</b><br/>
        <br/>
        <img src="https://web.archive.org/web/20120814115621im_/http://imagesak.roblox.com/53e3c888e8953ce69ff43e6ba12237dc.png"/><br/>
        <b>Builders Club Only</b> items are those which can only be purchased by users with a <a href="upgrades/BuildersClubMemberships.aspx" alt="Builders Club!">Builders Club</a> membership.<br/>
        <br/>
        <img src="https://web.archive.org/web/20120814115621im_/http://imagesak.roblox.com/532e54e5ff6266bbf26e583dab4d6765.png"/><br/>
        <b>Limited Items</b> are those which were once sold by ROBLOX and will not be sold again. Users who own these items can re-sell them to other users for the price of their choice.<br/>
        <br/>
        <img src="https://web.archive.org/web/20120814115621im_/http://imagesak.roblox.com/1c3d939e33134e7266678e510e774ac2.png"/><br/>
        <b>Limited Unique Items</b> are sold by ROBLOX until they run out (we could release, say, 100 of a certain hat.) When you buy these, they are stamped with a serial number (i.e. 7 / 100) that shows which one you got.<br/>
        <br/>
        Once these items run out, they can also be sold to other users.
    </div>
</div>
<div id="ctl00_cphRoblox_rbxCatalog_CreateSetPanelDiv" class="createSetPanelPopup" style="width: 400px; height: 100%; padding: 0px; float: left; display: none">
  
    

</div>

<div class="Assets">
    <div id="ctl00_cphRoblox_rbxCatalog_HeaderPagerPanel" class="HeaderPager" style="display: none;">
        
        <span id="ctl00_cphRoblox_rbxCatalog_HeaderPagerLabel">Page 1 of 165</span>
        <a id="ctl00_cphRoblox_rbxCatalog_HeaderPagerHyperLink_Next" href="Catalog.aspx?m=Featured&amp;c=8&amp;t=AllTime&amp;d=All&amp;q=&amp;p=2&amp;mn=-9223372036854775808&amp;mx=9223372036854775807">Next <span class="NavigationIndicators">&gt;&gt;</span></a>
    </div>
    <div class="StandardBoxHeader">
        <span id="ctl00_cphRoblox_rbxCatalog_AssetsDisplaySetLabel">Featured Items</span>
    </div>
    <div class="StandardBox">
        
    <table id="ctl00_cphRoblox_rbxCatalog_AssetsDataList" cellspacing="0" align="Center" border="0" style="border-collapse:collapse;">
  <tr>
    <td valign="top">
          <div class="Asset" style="margin-left:5px;margin-right:5px;">
            <div class="AssetThumbnail">
              <a id="ctl00_cphRoblox_rbxCatalog_AssetsDataList_ctl00_AssetThumbnailHyperLink" title="the funny" href="#" style="display:inline-block;height:110px;width:110px;cursor:pointer;"><img src="https://web.archive.org/web/20120815031545im_/http://t0ak.roblox.com/d5f0b8e683c85be53b87a70782fe7e31" height="110" width="110" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="The Funny"/></a>
                      
                
                    
                    
                    
                    
                    
            </div>
            <div class="AssetDetails">
              <div class="AssetName"><a id="ctl00_cphRoblox_rbxCatalog_AssetsDataList_ctl00_AssetNameHyperLink" href="#">The unfunny !1!11!!</a></div>
              <div class="AssetLastUpdate">
                  <span class="Label">Updated:</span>
                  <span class="Detail">10 hours ago</span>
              </div>
              <div class="AssetCreator">
                  <span class="Label">Creator:</span>
                  <span class="Detail"><a id="ctl00_cphRoblox_rbxCatalog_AssetsDataList_ctl00_CreatorHyperLink" href="/User/id.php?user=1">ROAR</a></span>
              </div>
              <div class="AssetsSold">
                  <span class="Label">Number Sold:</span> 
                  <span class="Detail">44</span>
              </div>
              
              
              <div class="AssetFavorites">
                  <span class="Label">Favorited:</span>
                  <span class="Detail">24 times</span>
              </div>
              <div class="AssetPrice">
                  <span class="PriceInRobux">R$: 150</span>
              </div>
              
                
            </div>
        </div>
      </td><td valign="top">
          <div class="Asset" style="margin-left:5px;margin-right:5px;">
            <div class="AssetThumbnail">
              <a id="ctl00_cphRoblox_rbxCatalog_AssetsDataList_ctl01_AssetThumbnailHyperLink" title="Mystic Foreteller" href="/web/20120814115621/http://roblox.com/Mystic-Foreteller-item?id=89611361" style="display:inline-block;height:110px;width:110px;cursor:pointer;"><img src="img/112.png" height="110" width="110" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Mystic Foreteller"/></a>
                      
                
                    
                    
                    
                    
                    
            </div>
            <div class="AssetDetails">
              <div class="AssetName"><a id="ctl00_cphRoblox_rbxCatalog_AssetsDataList_ctl01_AssetNameHyperLink" href="#">Helmets for retards</a></div>
              <div class="AssetLastUpdate">
                  <span class="Label">Updated:</span>
                  <span class="Detail">0 hours ago</span>
              </div>
              <div class="AssetCreator">
                  <span class="Label">Creator:</span>
                  <span class="Detail"><a id="ctl00_cphRoblox_rbxCatalog_AssetsDataList_ctl01_CreatorHyperLink" href="/User/id.php?user=1">ROAR</a></span>
              </div>
              <div class="AssetsSold">
                  <span class="Label">Number Sold:</span> 
                  <span class="Detail">0</span>
              </div>
              
              
              <div class="AssetFavorites">
                  <span class="Label">Favorited:</span>
                  <span class="Detail">0 times</span>
              </div>
              <div class="AssetPrice">
                  <span class="PriceInTickets">Tix: 1</span>
              </div>
              
                
            </div>
        </div>
      </td><td valign="top">
          <div class="Asset" style="margin-left:5px;margin-right:5px;">
            <div class="AssetThumbnail">
              <a id="ctl00_cphRoblox_rbxCatalog_AssetsDataList_ctl02_AssetThumbnailHyperLink" title="Unit 3021" href="/web/20120814115621/http://roblox.com/Unit-3021-item?id=89609598" style="display:inline-block;height:110px;width:110px;cursor:pointer;"><img src="/img/real.png" height="110" width="110" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Unit 3021"/></a>
                       </div>
            <div class="AssetDetails">
              <div class="AssetName"><a id="ctl00_cphRoblox_rbxCatalog_AssetsDataList_ctl01_AssetNameHyperLink" href="#">私を殺してみんなを殺す</a></div>
              <div class="AssetLastUpdate">
                  <span class="Label">Updated:</span>
                  <span class="Detail">11 hours ago</span>
              </div>
              <div class="AssetCreator">
                  <span class="Label">Creator:</span>
                  <span class="Detail"><a id="ctl00_cphRoblox_rbxCatalog_AssetsDataList_ctl01_CreatorHyperLink" href="/User/id.php?user=1">ROAR</a></span>
              </div>
              <div class="AssetsSold">
                  <span class="Label">Number Sold:</span>
                  <span class="Detail">18</span>
              </div>
              
              
              <div class="AssetFavorites">
                  <span class="Label">Favorited:</span>
                  <span class="Detail">14 times</span>
              </div>
              <div class="AssetPrice">
                  <span class="PriceInTickets">Tix: 1</span>
              </div>
                <br>
              <td valign="top">
          <div class="Asset" style="margin-left:5px;margin-right:5px;">
            <div class="AssetThumbnail">
              <a id="ctl00_cphRoblox_rbxCatalog_AssetsDataList_ctl00_AssetThumbnailHyperLink" title="the funny" href="#" style="display:inline-block;height:110px;width:110px;cursor:pointer;"><img src="/img/sw.png" height="110" width="110" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="The Funny"/></a>
                      
                
                    
                    
                    
                    
                    
            </div>
            <div class="AssetDetails">
              <div class="AssetName"><a id="ctl00_cphRoblox_rbxCatalog_AssetsDataList_ctl00_AssetNameHyperLink" href="#">Shitwork Headphones</a></div>
              <div class="AssetLastUpdate">
                  <span class="Label">Updated:</span>
                  <span class="Detail">10 hours ago</span>
              </div>
              <div class="AssetCreator">
                  <span class="Label">Creator:</span>
                  <span class="Detail"><a id="ctl00_cphRoblox_rbxCatalog_AssetsDataList_ctl00_CreatorHyperLink" href="/User/id.php?user=1">ROAR</a></span>
              </div>
              <div class="AssetsSold">
                  <span class="Label">Number Sold:</span> 
                  <span class="Detail">1</span>
              </div>
              
              
              <div class="AssetFavorites">
                  <span class="Label">Favorited:</span>
                  <span class="Detail">51 times</span>
              </div>
              <div class="AssetPrice">
                  <span class="PriceInRobux">R$: 99999999</span>
              </div>
              
                
            </div>
        </div> 
                    
                    
                    
                    
            
                
            </div>
        </div>
      </td>
  </tr><tr>
    <td colspan="5">
                <div id="ctl00_cphRoblox_rbxCatalog_AssetsDataList_ctl20_CatalogDescriptionPanel" style="float: left; width: 630px; font-size: 0.9em; padding: 10px; border-top: 1px solid #AAAAAA;">
      
                Avatar Items - ROBLOX has a full virtual goods catalog with avatar items and other virtual items. Create a free account on ROBLOX and start collecting <h1 style="display:inline; font-size:100%; font-weight:normal;">virtual avatar items</h1>, virtual goods, virtual items, and other gear for your virtual avatars.
            
    </div>
      </td>
  </tr>
</table>
    
    </div>
    <div id="ctl00_cphRoblox_rbxCatalog_FooterPagerPanel" class="HeaderPager">
        
        <span id="ctl00_cphRoblox_rbxCatalog_FooterPagerLabel">Page 1 of 165</span>
        <a id="ctl00_cphRoblox_rbxCatalog_FooterPagerHyperLink_Next" href="Catalog.aspx?m=Featured&amp;c=8&amp;t=AllTime&amp;d=All&amp;q=&amp;p=2&amp;mn=-9223372036854775808&amp;mx=9223372036854775807">Next <span class="NavigationIndicators">&gt;&gt;</span></a>
    </div>
</div>
        <div style="clear: both;"></div>
    </div>

                <div style="clear:both"></div>
            </div>
        </div>
        </div>
        
            
<div id="Footer">
    <div class="FooterNav">
        <a id="ctl00_cphFooter_rbxFooter_PrivacyHyperLink" ref="footer-privacy" href="/web/20120814115621/http://roblox.com/info/Privacy.aspx"><b>Privacy Policy</b></a>
        &nbsp;|&nbsp; 
        <a id="ctl00_cphFooter_rbxFooter_AdvertiseHyperLink" ref="footer-advertise" href="https://web.archive.org/web/20120814115621/http://corp.roblox.com/advertise-on-roblox">Advertise with Us</a>
        &nbsp;|&nbsp; 
        <a id="ctl00_cphFooter_rbxFooter_PressHyperLink" ref="footer-press" href="https://web.archive.org/web/20120814115621/http://corp.roblox.com/roblox-press">Press</a>
        &nbsp;|&nbsp; 
        <a id="ctl00_cphFooter_rbxFooter_ContactHyperLink" ref="footer-contact" href="https://web.archive.org/web/20120814115621/http://corp.roblox.com/contact-us">Contact Us</a>
        &nbsp;|&nbsp;
        <a id="ctl00_cphFooter_rbxFooter_AboutHyperLink" ref="footer-about" href="https://web.archive.org/web/20120814115621/http://corp.roblox.com/">About Us</a>
        &nbsp;|&nbsp;
        <a id="ctl00_cphFooter_rbxFooter_BlogHyperLink" ref="footer-blog" href="https://web.archive.org/web/20120814115621/http://blog.roblox.com/">Blog</a>
        &nbsp;|&nbsp;
        <a id="ctl00_cphFooter_rbxFooter_JobsHyperLink" ref="footer-jobs" href="https://web.archive.org/web/20120814115621/http://corp.roblox.com/jobs">Jobs</a>
        &nbsp;|&nbsp;
        <a id="ctl00_cphFooter_rbxFooter_ParentsHyperLink" ref="footer-parents" href="/web/20120814115621/http://roblox.com/Parents.aspx">Parents</a>
    </div>
    <div class="FooterNav">
        <div id="ctl00_cphFooter_rbxFooter_SEOGenreLinks" class="SEOGenreLinks"><a href="/web/20120814115621/http://roblox.com/FreeGames.aspx" ref="footer-games">Free Games</a>&nbsp;|&nbsp;<a href="/web/20120814115621/http://roblox.com/all-games" title="All Games" ref="footer-genres">All</a>&nbsp;|&nbsp;<a href="/web/20120814115621/http://roblox.com/building-games" title="Building Games" ref="footer-genres">Building</a>&nbsp;|&nbsp;<a href="/web/20120814115621/http://roblox.com/horror-games" title="Horror Games" ref="footer-genres">Horror</a>&nbsp;|&nbsp;<a href="/web/20120814115621/http://roblox.com/town-and-city-games" title="Town and City Games" ref="footer-genres">Town and City</a>&nbsp;|&nbsp;<a href="/web/20120814115621/http://roblox.com/military-games" title="Military Games" ref="footer-genres">Military</a>&nbsp;|&nbsp;<a href="/web/20120814115621/http://roblox.com/comedy-games" title="Comedy Games" ref="footer-genres">Comedy</a>&nbsp;|&nbsp;<a href="/web/20120814115621/http://roblox.com/medieval-games" title="Medieval Games" ref="footer-genres">Medieval</a>&nbsp;|&nbsp;<a href="/web/20120814115621/http://roblox.com/adventure-games" title="Adventure Games" ref="footer-genres">Adventure</a>&nbsp;|&nbsp;<a href="/web/20120814115621/http://roblox.com/sci-fi-games" title="Sci-Fi Games" ref="footer-genres">Sci-Fi</a>&nbsp;|&nbsp;<a href="/web/20120814115621/http://roblox.com/naval-games" title="Naval Games" ref="footer-genres">Naval</a>&nbsp;|&nbsp;<a href="/web/20120814115621/http://roblox.com/fps-games" title="FPS Games" ref="footer-genres">FPS</a>&nbsp;|&nbsp;<a href="/web/20120814115621/http://roblox.com/rpg-games" title="RPG Games" ref="footer-genres">RPG</a>&nbsp;|&nbsp;<a href="/web/20120814115621/http://roblox.com/sports-games" title="Sports Games" ref="footer-genres">Sports</a>&nbsp;|&nbsp;<a href="/web/20120814115621/http://roblox.com/fighting-games" title="Fighting Games" ref="footer-genres">Fighting</a>&nbsp;|&nbsp;<a href="/web/20120814115621/http://roblox.com/western-games" title="Western Games" ref="footer-genres">Western</a></div>
    </div>
    <div class="legal">
        <div class="left">
            <a href="https://web.archive.org/web/20120814115621/http://www.truste.org/ivalidate.php?url=www.roblox.com&amp;sealid=105" id="ctl00_cphFooter_rbxFooter_TrusteeSeal" ref="parents-truste"><img height="60" width="44" src="https://web.archive.org/web/20120814115621im_/http://imagesak.roblox.com/c54428d4c073c3afa9348e76007733b6.png" border="0" id="TrusteLogo" alt="Truste"/></a>
            <a target="_blank" href="https://web.archive.org/web/20120814115621/https://www.bbb.org/online/consumer/cks.aspx?id=109111915116750" ref="parents-bbb"><img height="60" width="37" title="Click to verify BBB accreditation and to see a BBB report." border="0" src="https://web.archive.org/web/20120814115621im_/http://imagesak.roblox.com/74b610d718b1e3ae3a672f545523566c.gif" alt="Click to verify BBB accreditation and to see a BBB report."/></a>
        </div>
        <div class="right">
            

<p class="Legalese">
    ROBLOX, "Online Building Toy", characters, logos, names, and all related indicia are trademarks of <a href="https://web.archive.org/web/20120814115621/http://corp.roblox.com/" ref="footer-smallabout">ROBLOX Corporation</a>, ©2012. Patents pending.
    ROBLOX is not sponsored, authorized or endorsed by any producer of plastic building bricks, including The LEGO Group, MEGA Brands, and K'Nex, and no resemblance to the products of these companies is intended. Use of this site signifies your acceptance of the <a href="/web/20120814115621/http://roblox.com/info/TermsOfService.aspx" ref="footer-terms">Terms and Conditions</a>.
</p>

        </div>
        <div class="clear"></div>
    </div>
</div>
        
        
    </div>
 
    
</body>
</html>