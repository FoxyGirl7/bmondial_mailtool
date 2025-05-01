import React from 'react';
import { createRoot } from 'react-dom/client';
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import Splash from './pages/Splash';

const container = document.getElementById('app');
const root = createRoot(container);

root.render(
  <React.StrictMode>
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<Splash />} />
      </Routes>
    </BrowserRouter>
  </React.StrictMode>
);
