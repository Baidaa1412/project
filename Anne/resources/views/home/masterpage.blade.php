<!DOCTYPE html>
<html lang="en">

@extends('home.head')

<body>
    <!-- Header section -->
    @extends('home.nav')

    <!-- Content section -->
    <section>
        @yield('content') <!-- This is where the content for each page will go -->
    </section>

    <!-- Footer section -->
    @extends('home.footer')
    @extends('home.script')

  </body>

</html>
