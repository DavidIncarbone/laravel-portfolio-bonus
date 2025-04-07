// Creazione della GlobalContext che conterrà tutte le chiamate API al server
import { createContext, useContext } from "react";
import axios from "axios";


// Variables

const apiUrl = import.meta.env.VITE_APIURL;


const GlobalContext = createContext();  //crea il Context e gli do il nome GlobalContext

// Creo il provider customizzato:
const GlobalProvider = ({ children }) => {

    const data = {

    }

    return (

        <GlobalContext.Provider value={{ data }}>
            {children}
        </GlobalContext.Provider>
    )
}




function useGlobalContext() {
    const context = useContext(GlobalContext);
    if (!context) {
        throw new Error("useGlobalContext is not inside the context provider GlobalProvider");
    }
    return context;
}

export { GlobalProvider, useGlobalContext };