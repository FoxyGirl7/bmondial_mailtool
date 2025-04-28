import React from "react";

export default function Dashboard() {
  return (
    <div className="min-h-screen bg-gray-100 flex flex-col items-center justify-center p-4">
      <h1 className="text-4xl font-bold text-blue-600 mb-4">Welcome to the Dashboard</h1>
      <p className="text-lg text-gray-700 mb-6">This is a test of Tailwind CSS styles.</p>
      <button className="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-300">
        Test Button
      </button>
      <div className="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <div className="bg-white p-4 rounded-lg shadow-md">Card 1</div>
        <div className="bg-white p-4 rounded-lg shadow-md">Card 2</div>
        <div className="bg-white p-4 rounded-lg shadow-md">Card 3</div>
      </div>
    </div>
  );
}