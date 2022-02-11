<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <marquee behavior="" direction="">
        {{ $username }}
{{-- 
    @if (1 == 1)
        {{ 'deu certo'}}
    @else
        {{ 'deu errado' }}
    @endif
   
    @foreach ($args as $argumento)
        {{$argumento}}
    @endforeach --}}

    @auth() {{--logado--}}
        {{$arg}}
    @endauth
    @guest() {{--Deslogado--}}
        
    @endguest

    @if($username == 'kawa')
        <h1>Ufa!</h1>
    @elseif($username == 'kaka')
        <h2>Legal!</h2>

    @else
    <h2>O {{$username}} passou!!</h2>
    @endif

    @unless ($username == 'jose') {{--condição de negação, sempre false--}}
    {{-- unless = false --}}
    <h2>O jose nao existe bro</h2>
    @endunless

    @isset($args[1])
        <a href="#">Array 'agrs' está setado</a>
    @endisset

    @empty($args['a'])
        <h3>Está vazio</h3>
    @endempty

    <table>
        @for($i = 0; $i < 10; $i++)
            <tr>
                <td>{{$i}}</td>
            </tr>
        @endfor
    </table>

    @while ($whilezada)
        
        {{dump($whilezada)}}
        @if ($whilezada)
        {{ $whilezada = false}}
        
        @endif
    @endwhile

    @foreach ($alunos as $key => $nomesAlunos)
        <tr>
           <br> <td>{{$key . ' => ' . $nomesAlunos}}</td>
        </tr>
    @endforeach
    


    </marquee>
</body>
</html>
