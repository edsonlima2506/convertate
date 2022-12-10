@include('layouts.app')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/button.css')}}">
</head>
<body>
    <main>
        <img src="{{asset('img/storyset/index-image.png')}}" alt="" class="principal-image">
        <div class="form">
            <form action="" method="POST">
                {{-- File input --}}
                <div class="mb-3">
                    <label for="formFile" class="form-label">Faça o upload do seu arquivo</label>
                    <input class="form-control" type="file" id="formFile">
                </div>

                {{-- File type select --}}
                <div class="mb-3">
                    <label for="form-select" class="form-label">Escolha para qual formato converter</label>
                    <select class="form-select" id="form-select" aria-label="Default select">
                        <option selected>PNG</option>
                        <option value="1">PDF</option>
                        <option value="2">JPG</option>
                        <option value="3">XLSX</option>
                    </select>
                </div>

                {{-- Convert button --}}
                <input class="btn btn-outline-danger" name="submit" type="submit" value="Converter">

                {{-- Download button --}}
                <button id="button" class="ready" onclick="clickButton();" type="button">
                    <div class="message submitMessage">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 12.2">
                        <polyline stroke="currentColor" points="2,7.1 6.5,11.1 11,7.1 "/>
                        <line stroke="currentColor" x1="6.5" y1="1.2" x2="6.5" y2="10.3"/>
                        </svg> <span class="button-text">Baixar arquivo</span>
                    </div>
                    
                    <div class="message loadingMessage">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 17">
                        <circle class="loadingCircle" cx="2.2" cy="10" r="1.6"/>
                        <circle class="loadingCircle" cx="9.5" cy="10" r="1.6"/>
                        <circle class="loadingCircle" cx="16.8" cy="10" r="1.6"/>
                        </svg>
                    </div>
                    
                    <div class="message successMessage">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 11">
                        <polyline stroke="currentColor" points="1.4,5.8 5.1,9.5 11.6,2.1 "/>
                        </svg> <span class="button-text">Sucesso!</span>
                    </div>
                </button>
                <canvas id="canvas"></canvas>
            </form>
        </div>
    </main>
    <script src="{{asset('js/button.js')}}"></script>
</body>
</html>