import React from 'react';
import '../css/app.css'; 
import { createRoot } from 'react-dom/client';
import Dashboard from './components/Dashboard'; // (✅ updated path)

const container = document.getElementById('app');
const root = createRoot(container);

root.render(
  <React.StrictMode>
    <Dashboard />
  </React.StrictMode>
);
