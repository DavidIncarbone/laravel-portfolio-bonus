
import { BrowserRouter, Routes, Route } from "react-router-dom"
import DefaultLayout from "./layouts/DefaultLayout"
import HomePage from "./pages/HomePage"
import PostPage from "./pages/PostPage"
import NotFound from "./pages/NotFound"
import { GlobalProvider } from "./contexts/GlobalContext"

function App() {

  return (

    <BrowserRouter>
      <GlobalProvider>
        <Routes>
          <Route Component={DefaultLayout} >
            <Route index Component={HomePage} />
            <Route path="/post/:id" Component={PostPage} />
            <Route path="*" Component={NotFound} />
          </Route>
        </Routes>
      </GlobalProvider>
    </BrowserRouter>

  )
}

export default App
