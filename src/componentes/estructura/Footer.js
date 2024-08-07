import React from 'react'
import { GiDiamondHard } from "react-icons/gi";
import { BsSuitHeart } from "react-icons/bs";

function Footer() {
  return (
    <footer className="min-h-[15vh] flex justify-center">
      <div>
        <ul className='dark:bg-slate-700 border-2 border-pink-500 w-fit p-4 rounded-full flex flex-row gap-4'>
         <li>
            Contacto
          </li>  
          <li className='text-3xl dark:animate-pulse text-pink-500 '>
          <BsSuitHeart />


          </li>
         
          <li>
            Contacto
          </li>
        </ul>
      </div>

    </footer>
  )
}

export default Footer