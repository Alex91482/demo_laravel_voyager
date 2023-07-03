<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
</head>
<body>
    <header>
        <section>
            <div>                                       
                <nav>
                    <ul>
                        <li><a href="/">HOME</a></li>
                        <li><a href="/articles">ARTICLES</a></li>
                        <li><a href="/journal">JOURNAL</a></li>
                    </ul>
                </nav>
                <h2>Good News</h2>
            </div>
        </section>
    </header>
    <main>
        <section>
            <div>
                <div>
                    <h3>Journal</h3>
                </div>
                <div>
                    <ul>
                        <li>
                            <div>
                            
                            @yield('content')
                             
                            </div>                          
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
</body>
</html>