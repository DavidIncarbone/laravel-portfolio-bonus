// Creazione della GlobalContext che conterrà tutte le chiamate API al server
import { createContext, useContext, useState } from "react";
import { useParams } from "react-router-dom";
import axios from "axios";

//crea il Context e gli do il nome GlobalContext

const GlobalContext = createContext();


// Creo il provider customizzato:
const GlobalProvider = ({ children }) => {

    // Variables

    const apiUrl = import.meta.env.VITE_API_URL;

    // project

    const endpoint = "projects";
    const [projects, setProjects] = useState([]);

    const projectEndpoint = `project/`;
    const [project, setProject] = useState({});

    const [isLoading, setIsLoading] = useState(true);

    // Functions

    const fetchProjects = () => {
        axios.get(apiUrl + endpoint).then((res) => {
            setIsLoading(false);
            console.log(res.data.data);
            setProjects(res.data.data);

        }).catch((err) => {
            console.log(err);
        }).finally(() => {
            console.log("Chiamata effettuata", projects);
        });
    };

    const fetchProject = (id) => {
        axios.get(apiUrl + projectEndpoint + id).then((res) => {
            setIsLoading(false);
            console.log(res.data);
            setProject(res.data.data)
        }).catch((err) => {
            console.log(err);
        })
    }

    const data = {
        projects,
        project,
        fetchProjects,
        fetchProject,
        isLoading,

    }

    return (

        <GlobalContext.Provider value={data}>
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