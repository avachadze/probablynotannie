import React from 'react'
import { BrowserRouter, Routes, Route } from 'react-router-dom'
import Contenido from './Contenido';

function Header() {
    const [dark, setDark] = React.useState(false);

    const darkModeHandler = () => {
        setDark(!dark);
        document.body.classList.toggle("dark");
    }
    return (
        <BrowserRouter>
            <header className='dark:bg-blend-multiply h-[25vh] grid grid-cols-12  '>
                <label class="inline-flex items-center cursor-pointer ">
                    <input onChange={() => darkModeHandler()} type="checkbox" class="switch__input" id="Switch" />
                    <label class="switch__label" for="Switch">
                        <span class="switch__indicator"></span>
                        <span class="switch__decoration"></span>
                    </label>
                    

                </label>
            </header>
            <Routes>
                <Route index element={<Contenido />}></Route>
                {/* <Route path='vueltas' element={<Vueltas />}></Route> */}

            </Routes>
        </BrowserRouter>
    )
}

export default Header