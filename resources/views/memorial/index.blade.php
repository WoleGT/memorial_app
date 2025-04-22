 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oluwole George-Taylor Snr Memorial</title>
    <meta name="Keyword" Content="Web App Development, Software Development">
    <meta name="Keyword" Description="Website Development, Custom Website Solutions">
    <meta name="Keyword" Author="wolegtconsulting.dev">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">   
    <link rel="icon" href="{{asset('profile_pic.jpeg')}}">
  </head>
 <body style="background-color: #E1E2E4">
 

@extends('layouts.master')
@section('content')
    

</h5>
<h3>Survived by:</h3>
    <p> Wife, Children and Grandchildren </p>


    <div class="col-md-6">
             <button type="button" class="btn btn-outline-dark" onmouseover="typeWriter()">Read Biography</button>
             <p id="demo" style="font-size: 15px; background-color: white; color: black; border-radius: 15px"></p>            
    </div>
     
    <a>Resources:</a>
    <ul style="padding-left:40px">
        <li>  
           <a href="{{asset('My School of Prayer by Oluwole George-Taylor.pdf')}}"  target="_blank" style="text-decoration:none" id="a1">Wake-keep Program</a>
        </li>
        <li>
           <a href="{{asset('My School of Prayer by Oluwole George-Taylor.pdf')}}" target="_blank" style="text-decoration:none" id="a1">Order of Funeral Service</a>
        </li>
        <li>
           <a href="https://www.instagram.com/wolegt_?upcoming_event_id=18036329114273157" target="_blank" style="text-decoration:none" id="a1">Live Streaming</a>
        </li>
    </ul>
    <!-- <a href="https://www.instagram.com/wolegt_?upcoming_event_id=18036329114273157" target="_blank"><button type="button" class="btn btn-outline-dark">Live Streaming</button></a> -->
   
@endsection


<script>
        var i = 0;
        var txt = 'Oluwole Akanni George-Taylor was born on the 13th February 1948, to the late Chief Nathaniel Oluwemimo George-Taylor and Mrs. Adeola Abeke George-Taylor "Sweetie" (nee Agbaje). He started his primary school at Baptist School, Apapa Road, Ebute Metta, Lagos in January 1953, and later on he moved to Ibadan in 1958 with his Dad, who was then the Chief Industrial Officer, Ministry of Trade and Industry of the Western Region of Nigeria. He continued his primary school education at Methodist School, Akintola Road, Ibadan. After his primary education, he proceeded to the prestigious Mayflower School, Ikene, Ogun State in 1961 for his secondary education. Thereafter he started working at the then Old Western Region of Nigeria Government and was posted to a company in Badagry. He was sent to the company"s head office in Italy where he worked for sometime before returning to Lagos, Nigeria. Upon returning to the country he joined another company which is into paper products as a salesman.  He then proceeded to attend a Technical College in Lagos, where he learnt the skills in craftsmanship in building construction. He had developed passion for building construction as a result of the magnificent architectural style and designs of building structures he saw during his stay in Italy. After passing out of college, he decided to settle down in Ibadan, a place he chose as home. He worked at different times with different Civil Engineering and Building Construction Companies in Ibadan, such as Abdullahi & Awomolo Nigeria Limited and Alhaji Oliyide & Sons Limited, just to mention a few, where he was involved in some public & government building projects built around the Ibadan metropolis and across states in Nigeria. He later started his own company, Wole George-Taylor & Co., a general merchant and building contractor firm. In 1977, he got married to his beautiful wife, Abimbola Boluwatife George-Taylor (nee Akeredolu-Ale) in Ibadan, the capital of Oyo State. They are both blessed with Children and many Grandchildren. Among his circle of friends, he was fondly called a nickname - "007", after his favorite movie actor in the seventies, "Roger Moore", also known as James Bond, who starred in the movie - The Spy Who Loved Me. Among his siblings, they called him a nickname - "Dganga himself".  May God Almighty grant him eternal rest through Jesus Christ. Amen'
        var speed = 50;
        
        function typeWriter() {
          if (i < txt.length) {
            document.getElementById("demo").innerHTML += txt.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
          }
        }
        </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>




