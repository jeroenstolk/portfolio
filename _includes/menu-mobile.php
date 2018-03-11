<?php
echo '<nav class="wrapper">
<input id="menu-toggle" type="checkbox">
<label for="menu-toggle" class="label-toggle"></label>

<ul id="menu-mobile">

<li class="prime">
<a href="#" id="forhandlere">Forhandlere</a>
</li>
<li class="sub forhandlere" style="display:none;">
<ul>
<li><a href="/Reseller/Create">Opret forhandler</a></li>
<li><a href="/Reseller">Vis forhandlere</a></li>
<li><a href="/Reseller/Search">Søg forhandlere</a></li>
</ul>
</li>

<li class="prime">
<a href="#" id="shortcodes">Shortcodes</a>
</li>
<li class="sub shortcodes" style="display:none;">
<ul>
<li><a href="/Shortcode/Create">Opret Shortcode</a></li>
<li><a href="/Shortcode">Vis Shortcodes</a></li>
<li><a href="/Shortcode/Search">Søg Shortcode</a></li>
</ul>
</li>

<li class="prime">
<a href="#" id="kommunikation">Kommunikation</a>
</li>
<li class="sub kommunikation" style="display:none;">
<ul>
<li><a href="/Communication/CreateTargetGroup">Opret Målgruppe</a></li>
<li><a href="/Communication/ShowTargetGroup">Vis Målgrupper</a></li>
<li><a href="/Communication/CreateNewsSMS">Opret Nyheds SMS</a></li>
<li><a href="/Communication/ShowNewsSMS">Vis Nyheds SMS</a></li>
<li><a href="/Communication/SMSAwaitingSend">Afventende Afsendelse</a></li>
<li><a href="/Communication/SMSCompletedSend">Udførte Afsendelse</a></li>
</ul>
</li>

<li class="prime">
<a href="#" id="keywords">Keywords</a>
</li>
<li class="sub keywords" style="display:none;">
<ul>
<li><a href="/Keyword/Create">Opret Keyword</a></li>
<li><a href="/Keyword">Vis Keywords</a></li>
<li><a href="/Keyword/Search">Søg Keyword</a></li>
</ul>
</li>

<li class="prime">
<a href="#" id="abonnement-priser">Abonnement/priser</a>
</li>
<li class="sub abonnement-priser" style="display:none;">
<ul>
<li><a href="/Subscription/SMSPrice">SMS priser</a></li>
<li><a href="/Subscription/SMSPriceInternational">SMS priser - udland</a></li>
<li><a href="/Subscription/Share">Share</a></li>
<li class="hidden"><a href="/Subscription/Subscriptions">Abonnementer</a></li>
<li><a href="/Subscription/CreateSubscription">Opret Abonnement</a></li>
</ul>
</li>

<li class="prime">
<a href="#" id="statistik">Statistik</a>
</li>
<li class="sub statistik" style="display:none;">
<ul>
<li><a href="/Statistic">Overblik</a></li>
<li><a href="/Statistic/SMS">SMS</a></li>
<li><a href="/Statistic/Economics">Økonomi</a></li>
<li><a href="/Statistic/RawData">Rådata csv</a></li>
</ul>
</li>

<li class="prime">
<a href="#" id="fakturering">Fakturering</a>
</li>
<li class="sub fakturering" style="display:none;">
<ul>
<li><a href="/Billing/Payment">Indbetalinger</a></li>
<li><a href="/Billing/Payout">Udbetalinger</a></li>
</ul>
</li>

<li class="prime">
<a href="#" id="diverse">Diverse</a>
</li>
<li class="sub diverse" style="display:none;">
<ul>
<li><a href="/Miscellaneous/UserAdministration">Brugeradministration</a></li>
<li><a href="/Miscellaneous/IpRestrictions">Ip Restrictions</a></li>
<li><a href="/Miscellaneous/TextSettings">Tekstopsætning</a></li>
<li><a href="/Miscellaneous/DocumentAdministration">Download administrator</a></li>
</ul>
</li>a

<li class="prime">
<a href="#" id="sms_log">SMS Log</a>
</li>
<li class="sub sms_log" style="display:none;">
<ul>
<li><a href="/SMSLog/SmsReceived">Modtaget</a></li>
<li><a href="/SMSLog/SmsSent">Sendt</a></li>
</ul>
</li>
<li><a href="/Account/LogOff">Log af</a></li>
</ul>
</nav>';
?>