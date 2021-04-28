# labb2-axel

## Commits on Apr 26, 2021

### Startat projekt

-Skapat gitrepo
-Lagt till ny wp installation
-Installerat Woocommerce och storefront
-Skapat storefront-child-tema

### Lagt in produkter

-Skapat shopens kategorier
-Lagt in produkter under varje kategori
-Satt specifika färg och storleksalternativ

## Commits on Apr 27, 2021

### Sidstruktur

-Ändrat startsidan till vy över alla produkter. Känns rimligt för en webbshop
-Satt en mörkgrön färg på header/footer. Passar häst-temat bättre än standardvitt. Lite natur-feeling.
-Maincontent-utrymmet på shop-sidan består nu endast av en widget till vänter, innehållandes alla produktkategorier. Tycker det är tydligt att ha lite fast navigation där. Till höger visas produkterna som hör till kategorin man valt. På shop-sidan visas alla produkter.

### Template override

- archive-product.php | Lagt in en text som visar "Psst!.. Fri frakt över 1000 kr!" längst ner på shop-sidan, men endast om produkter visas. 
- footer.php | -Lagt in länkar till sociala-medier i footern. Med widget från nerladdat plugin. Fixat så länkarna visas till höger i footern. © ridbutiken.se 2021.. får stå kvar till vänster.

### Eget plugin

-Gjort eget plugin som skapar en custom post type; Butiker

### Övrigt

-Lagt in en nedladdningsbar produkt (guiden)
-Fixat med moms och frakt. Lagt in så man kan välja gratis frakt om man handlar för över 1000kr.
-Lagt in så man kan välja att betala med direct transfer/ paypal (omredigeras till paypalsida)
-Tagit bort "add to cart"-/"select options"-knapparna genom remove_action från 'woocommerce_after_shop_loop_item'-hooken där de ritas ut.

## Commits on Apr 28, 2021

### Custom templates

-Skapat egna templates för "mina sidor", "om oss", "cart", "checkout"
-Bytit ut 'storefront_sidebar'-hooken som de alla innehöll, och har gjort en egen hook för varje sida så jag kan styra vilka menyer/sidebars som ska visas. 
-Också gjort templates för sidorna som visar info om butikerna (åtkomst i sidomenyn på "om oss"-sidan)
-reservationer för att jag missat något. Det är svårt att logga :)