<html>
<head>
    <title>JSON test1</title>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script>
        $( document ).ready(function( ) { //получаем GETом данные в виде JSON
            $.get(
                'data.php',
                '',
                function(data){
                    // Запускаем обработку данных. Результат поместим в элемент с id=myid
                    parseHTMLObject(data, $('#myid')[0]);
                },
                'json'
            );
        });

        function parseHTMLObject(data, element)
        {
            //Создаём элемент в соответствии с полученными данными
            var child = document.createElement(data.tagName);


            //Перебираем свойства объекта
            for(var prop in data)
            {
                //Пропускаем свойства tagName, elements, innerHTML
                if( (prop != 'tagName') && (prop != 'elements') && (prop != 'innerHTML'))
                {
                    //Добавляем свойства из данных
                    child.setAttribute(prop, data[prop]);
                }

                //Если есть innerHTML, то и его добавляем
                if(prop == 'innerHTML')
                {
                    child.innerHTML = data[prop];
                }
            }

            //Если у data есть дочерние элементы, и размер массива не 0, то перебираем их
            //и вызвываем рекурсию, передавая текущий данные и элемент-родитель
            if( data.hasOwnProperty('elements') && (data.elements.length) )
            {
                for(var i in data.elements)
                {
                    parseHTMLObject(data.elements[i], child);
                }
            }

            //Добавляем к элементу его потомка
            element.appendChild(child);

        }

    </script>
</head>
<body>

<div id="myid"></div>

</body>
</html>
