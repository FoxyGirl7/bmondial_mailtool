import React from 'react';
import { createRoot } from 'react-dom/client';
import Dashboard from './components/Dashboard'; // (✅ updated path)

const container = document.getElementById('app');
const root = createRoot(container);

root.render(
  <React.StrictMode>
    <Dashboard />
  </React.StrictMode>
);
