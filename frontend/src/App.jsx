
import { BrowserRouter, Routes, Route } from "react-router-dom"
import { useGlobalContext } from "./contexts/GlobalContext"
import DefaultLayout from "./layouts/DefaultLayout"
import HomePage from "./pages/HomePage"
import ProjectPage from "./pages/ProjectPage"
import Loader from "./components/Loader";
import NotFound from "./pages/NotFound"
import { GlobalProvider } from "./contexts/GlobalContext"

function App() {



  return (



    <BrowserRouter>

      <GlobalProvider>
        <Routes>
          <Route Component={DefaultLayout} >
            <Route index Component={HomePage} />
            <Route path="/project/:id" Component={ProjectPage} />
            <Route path="*" Component={NotFound} />
          </Route>
        </Routes>
      </GlobalProvider>
    </BrowserRouter>

  )
}

export default App
