# DiB Wordpress Theme 2018+

## cookie consent

This comes with an automatically triggering cookie-consent script based on [insites cookie consent script](https://cookieconsent.insites.com/)

```html
<link href="https://bewegung.jetzt/cookieconsent/css" rel="stylesheet" type="text/css" >
<script src="https://bewegung.jetzt/cookieconsent/js" type="text/javascript" />
```

Additionally, this cookie consent handels Matomo/Piwik automatically (if it is deployed on the default mode in the `_paq`-variable) and allows you to guard scripts and iframes to only load after consent has been giving. For that add the `data-cookieconsent="required"` attribute to the html-element in question. If a `data-src` is given, its result will be copied into the  `src`-attribute once consent is given (useful for iframes), if the element has a `type="text/plain"` the node will be replaced with the same but setting the mime to `text/javascript`.

Examples:

```html
<!-- this iframe doesn't have a proper 'src' so nothing will be loaded and consent is confirmed, then the data-src will be loaded -->
<iframe data-cookieconsent="required" data-src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fdemokratiebewegen%2Fvideos%2F1931725730428277%2F&amp;show_text=0&amp;width=560" width="560" height="315" frameborder="0"></iframe>

<!-- this script will be ignored by the browser, until consent is confirmed --><script data-cookieconsent="required" type="text/plain">
alert("Thanks for consenting!")
</script>
```