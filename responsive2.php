<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <title>Još jedan responsive</title>
    <link rel="stylesheet" href="responsive2.css">
    <meta name="viewport" content= "width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <div>
            <img id="logo" src="logo.png" alt="neki_logo">
        </div>
        <nav>
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">PRODUCTS</a></li>
                <li><a href="#">CONTACT US</a></li>
                <li><a href="#">LOGIN</a></li>
            </ul>
        </nav>
        <div class="hamburger-button">=</div>
    </header>
    <div class="container">
        <aside>
            <div id="filter-button">
            </div>
            <div class="filter-option1">
                <h4>Size</h4>
                <div class="filter-info1">
                    <input type="checkbox" id="size_38" name="size[]" value="38" checked>
                    <label for="size_38">38</label>
                </div>
                <div class="filter-info1">
                    <input type="checkbox" id="size_40" name="size[]" value="40">
                    <label for="size_40">40</label>
                </div>
                <div class="filter-info1">
                    <input type="checkbox" id="size_42" name="size[]" value="42">
                    <label for="size_42">42</label>
                </div>
            </div>
            <div class="filter-option2">
                <h4>Color</h4>
                <div class="filter-info2">
                    <input type="checkbox" id="color_red" name="color[]" value="red" checked>
                    <label for="color_red">Red</label>
                </div>
                <div class="filter-info2">
                    <input type="checkbox" id="color_blue" name="color[]" value="blue">
                    <label for="color_blue">Blue</label>
                </div>
                <div class="filter-info2">
                    <input type="checkbox" id='color_green' name="color[]" value="green">
                    <label for="color_green">Green</label>
                </div>
                <div class="filter-info2">
                    <input type="checkbox" id="color_yellow" name="color[]" value="yellow">
                    <label for="color_yellow">Yellow</label>
                </div>
            </div>
            <div class="filter-option3">
                <h4>Material</h4>
                <div class="filter-info3">
                    <input type="checkbox" id="material_cotton" name="material[]" value="cotton" checked>
                    <label for="material_cotton">Cotton</label>
                </div>
                <div class="filter-info3">
                    <input type="checkbox" id="material_silk" name="material[]" value="silk">
                    <label for="material_silk">Silk</label>
                </div>
                <div class="filter-info3">
                    <input type="checkbox" id="material_viscose" name="material[]" value="viscose">
                    <label for="material_viscose">Viscose</label>
                </div> 
                <div class="filter-info3">
                    <input type="checkbox" id="material_poliester" name="material[]" value="poliester">
                    <label for="material_poliester">Poliester</label>
                </div>
            </div>
        </aside>
        <main>
            <article class="product">
                <h4>Model 1</h4>
                <div>
                    <img src="slika1.jpg" alt="proizvod1">
                    <div class="product-info">
                        <p>Veoma neobičan dizajn</p>
                        <p>1000,00 DIN</p>
                        <button>Add to basket</button>
                    </div>
                </div>
            </article>
            <article class="product">
                <h4>Model 2</h4>
                <div>
                    <img src="slika2.jpg" alt="proizvod1">
                    <div class="product-info">
                        <p>Interesantan komad</p>
                        <p>1500,00 DIN</p>
                        <button>Add to basket</button>
                    </div>
                </div>
            </article>
            <article class="product">
                <h4>Model 3</h4>
                <div>
                    <img src="slika3.jpg" alt="proizvod3">
                    <div class="product-info">
                        <p>Skladna kombinacija za sve prilike</p>
                        <p>850,00 DIN</p>
                        <button>Add to basket</button>
                    </div>
                </div>
            </article>
            <article class="product">
                <h4>Model 4</h4>
                <div>
                    <img src="slika4.jpg" alt="proizvod4">
                    <div class="product-info">
                        <p>Izuzetna kompozicija boja</p>
                        <p>2500,00 DIN</p>
                        <button>Add to basket</button>
                    </div>
                </div>
            </article>
            <article>
                <h4>Model 5</h4>
                <div>
                    <img src="slika5.jpg" alt="proizvod5">
                    <div class="product-info">
                        <p>Lepršavost na prvom mestu</p>
                        <p>1800,00 DIN</p>
                        <button>Add to basket</button>
                    </div>
                </div>
            </article>
            <article class="product">
                <h4>Model 6</h4>
                <div>
                    <img src="slika6.jpg" alt="proizvod6">
                    <div class="product-info">
                        <p>Nesvakidašnji komad koji morate da priuštite sebi</p>
                        <p>1200,00 DIN</p>
                        <button>Add to basket</button>
                    </div>
                </div>
            </article>
            <article class="product">
                <h4>Model 7</h4>
                <div>
                    <img src="slika7.jpg" alt="proizvod7">
                    <div class="product-info">
                        <p>Skladan dizajn i lepršavost</p>
                        <p>1500,00 DIN</p>
                        <button>Add to basket</button>
                    </div>
                </div>
            </article>
            <article class="product">
                <h4>Model 8</h4>
                <div>
                    <img src="slika8.jpg" alt="proizvod8">
                    <div class="product-info">
                        <p>MUST HAVE ove sezone</p>
                        <p>3000,00 DIN</p>
                        <button>Add to basket</button>
                    </div>
                </div>
            </article>
            <article class="product">
                <h4>Model 9</h4>
                <div>
                    <img src="slika9.jpg" alt="proizvod_9">
                    <div class="product-info">
                        <p>Neobican kroj, silueta dolazi do izražaja</p>
                        <p>2000,00 DIN</p>
                        <button>Add to basket</button>
                    </div>
                </div>
            </article>
        </main>
        <footer>
            <button id="myBtn"><a href="#top">Top</a></button> 
        </footer>
</body>