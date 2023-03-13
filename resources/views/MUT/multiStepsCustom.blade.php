
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    body {
  background: #b0ddff;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}
/* ------------------------- Separate line ------------------------- */
:root {
  --breadcrumb-theme-1: #1a006f;
  --breadcrumb-theme-2: #fff;
  --breadcrumb-theme-3: #0c0c47;
  --breadcrumb-theme-4: #0b0529;
}
.breadcrumb {
  text-align: center;
  display: inline-block;
  box-shadow: 0 2px 5px rgba(0,0,0,0.25);
  overflow: hidden;
  border-radius: 5px;
  counter-reset: flag;
}
.breadcrumb__step {
  text-decoration: none;
  outline: none;
  display: block;
  float: left;
  font-size: 12px;
  line-height: 36px;
  padding: 0 10px 0 60px;
  position: relative;
  background: var(--breadcrumb-theme-2);
  color: var(--breadcrumb-theme-1);
  transition: background 0.5s;
}
.breadcrumb__step:first-child {
  padding-left: 46px;
  border-radius: 5px 0 0 5px;
}
.breadcrumb__step:first-child::before {
  left: 14px;
}
.breadcrumb__step:last-child {
  border-radius: 0 5px 5px 0;
  padding-right: 20px;
}
.breadcrumb__step:last-child::after {
  content: none;
}
.breadcrumb__step::before {
  content: counter(flag);
  counter-increment: flag;
  border-radius: 100%;
  width: 20px;
  height: 20px;
  line-height: 20px;
  margin: 8px 0;
  position: absolute;
  top: 0;
  left: 30px;
  font-weight: bold;
  background: var(--breadcrumb-theme-2);
  box-shadow: 0 0 0 1px var(--breadcrumb-theme-1);
}
.breadcrumb__step::after {
  content: '';
  position: absolute;
  top: 0;
  right: -18px;
  width: 36px;
  height: 36px;
  transform: scale(0.707) rotate(45deg);
  z-index: 1;
  border-radius: 0 5px 0 50px;
  background: var(--breadcrumb-theme-2);
  transition: background 0.5s;
  box-shadow: 2px -2px 0 2px var(--breadcrumb-theme-4);
}
.breadcrumb__step--active {
  color: var(--breadcrumb-theme-2);
  background: var(--breadcrumb-theme-1);
}
.breadcrumb__step--active::before {
  color: var(--breadcrumb-theme-1);
}
.breadcrumb__step--active::after {
  background: var(--breadcrumb-theme-1);
}
.breadcrumb__step:hover {
  color: var(--breadcrumb-theme-2);
  background: var(--breadcrumb-theme-3);
}
.breadcrumb__step:hover::before {
  color: var(--breadcrumb-theme-1);
}
.breadcrumb__step:hover::after {
  color: var(--breadcrumb-theme-1);
  background: var(--breadcrumb-theme-3);
}
</style>
<body>
    
    
<div class="breadcrumb">
    <a class="breadcrumb__step breadcrumb__step--active" href="{{route('MUT.create')}}"> orders Details </a>
    {{-- <a class="breadcrumb__step" href="{{route('getAvailableHotels')}}">Hotel</a>
    <a class="breadcrumb__step" href="{{route('getAvailablePlaces')}}">places</a>
    <a class="breadcrumb__step" href="{{route('bookWithTourguide')}}">tourguide</a> --}}
    <a class="breadcrumb__step" href="{{route('MUT.store')}}">MUT.store</a>
    <a class="breadcrumb__step" href="#">cart</a>
    <a class="breadcrumb__step" href="#">cart</a>
 
</div>


@yield('custom')



<script>
    const $ = (selector: string): HTMLElement | null =>
  document.querySelector(selector);

const $$ = (selector: string): NodeList<HTMLElement> =>
  document.querySelectorAll(selector);

const breadcrumb: HTMLElement = $('.breadcrumb');
const breadcrumbSteps: NodeList<HTMLElement> = $$('.breadcrumb__step');

[].forEach.call(
  breadcrumbSteps,
  (item: HTMLElement, index: number, array: HTMLElement[]): void => {
    item.onclick = (): void => {
      for (let i = 0, l = array.length; i < l; i++) {
        if (index >= i) {
          array[i].classList.add('breadcrumb__step--active');
        } else {
         array[i].classList.remove('breadcrumb__step--active'); 
        }
      }
    };
  },
);

</script>
</body>
</html>