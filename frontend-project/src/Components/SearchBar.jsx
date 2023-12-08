import React, { useState } from "react";

function SearchBar({ placeholder, data }) {
  const [filteredData, setFilteredData] = useState([]);
  const [wordEntered, setWordEntered] = useState("");

  const handleFilter = (event) => {
    const searchWord = event.target.value;
    setWordEntered(searchWord);

    const newFilter = data.filter((value) => {
      return value.company_name.toLowerCase().startsWith(searchWord.toLowerCase());
    });

    setFilteredData(newFilter);
  };

  return (
    <div className="row d-flex justify-content-center">
      <div className="col-md-6">
        <div className="form">
          <i className="fa fa-search"></i>
          <input
            type="text"
            placeholder={placeholder}
            className="form-control form-input"
            value={wordEntered}
            onChange={handleFilter}
          />
          <span className="left-pan">
            <i className="fa fa-microphone"></i>
          </span>
        </div>

        {filteredData.length === 0 ? (
          <div className="text-center mt-3">
            <h4 className="text-info mb-4">¡Oops! No hay datos</h4>
            <p className="lead">Intenta buscar de nuevo con diferentes términos.</p>
          </div>
        ) : (
          <div className="dataResult">
            <table className="table">
              <thead>
                <tr>
                  <th>EMPRESA</th>
                  <th>TIPO DE EQUIPO</th>
                  <th>MARCA DE EQUIPO</th>
                  <th>PROCESADOR</th>
                  <th>GENERACION</th>
                  <th>FECHA DE INICIO</th>
                  <th>FECHA DE FIN</th>
                </tr>
              </thead>
              <tbody>
                {filteredData.slice(0, 15).map((value, index) => (
                  <tr key={index}>
                    <td>{value.company_name}</td>
                    <td>{value.equipment_type}</td>
                    <td>{value.equipment_mark}</td>
                    <td>{value.equipment_processor}</td>
                    <td>{value.equipment_generation}</td>
                    <td>{value.start_date}</td>
                    <td>{value.end_date}</td>
                  </tr>
                ))}
              </tbody>
            </table>
          </div>
        )}
      </div>
    </div>
  );
}

export default SearchBar;
