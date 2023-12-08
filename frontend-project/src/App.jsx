import React, { useEffect, useState } from "react";
import SearchBar from "./Components/SearchBar";
import "./App.css";

function App() {
  const [allLeasings, setAllLeasings] = useState([]);

  useEffect(() => {
    const getLeasings = async () => {
      try {
        const response = await fetch("http://127.0.0.1:8000/api/v1/companies");
        const data = await response.json();
        setAllLeasings(data.results);
      } catch (error) {
        console.error("Error fetching data:", error);
      }
    };

    getLeasings();
  }, []);

  return (
    <div className="App">
      <SearchBar placeholder="Enter a Company Name..." data={allLeasings} />
    </div>
  );
}

export default App;
