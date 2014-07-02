<!--div class="error">
  Our search engine is currently offline due to a breakdown at Google. We are still attempting to work around the problem. You can try visiting www.google.com and adding site:unsw.edu.au to your search terms. This will return only pages hosted on unsw.edu.au.
  <br /><br />We apologise for the inconvenience.
  <br />
</div-->
<div id='search-all-search-form'>
  <form method="get"> 
  <input class='form-text' type="text" name="kw" /><input class='form-submit' type="submit" value="Search" />
  </form>
</div>
<div id="search-all-filter-string"></div>
<div id="cse" style="width: 100%;">Loading</div>
<script src="https://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript"> 
  function parseQueryFromUrl () {
    var queryParamName = "kw";
    var search = window.location.search.substr(1);
    var parts = search.split('&');
    for (var i = 0; i < parts.length; i++) {
      var keyvaluepair = parts[i].split('=');
      if (decodeURIComponent(keyvaluepair[0]) == queryParamName) {
        return decodeURIComponent(keyvaluepair[1].replace(/\+/g, ' '));
      }
    }
    return '';
  }
  google.load('search', '1', {language : 'en'});
  google.setOnLoadCallback(function() {
    var customSearchControl = new google.search.CustomSearchControl('000994433739696123907:rmrfmaq5j9i');
    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
    var options = new google.search.DrawOptions();
    options.enableSearchResultsOnly(); 
    customSearchControl.draw('cse', options);
    customSearchControl.setLinkTarget(google.search.Search.LINK_TARGET_SELF);
    var queryFromUrl = parseQueryFromUrl();
    if (queryFromUrl) {
      customSearchControl.execute(queryFromUrl);
    }
  }, true);
  if(parseQueryFromUrl()){
    document.getElementById('search-all-filter-string').innerHTML = 'Search result for \'' + parseQueryFromUrl() + '\'';
  }
</script>
<link rel="stylesheet" href="https://www.google.com/cse/style/look/default.css" type="text/css" /> 
