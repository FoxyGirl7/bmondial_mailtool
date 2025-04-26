<?php

namespace App\Http\Controllers;

use App\Models\CampaignContact;
use App\Models\Contact;
use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignContactController extends Controller
{
    /**
     * 1. List all campaign-contact links
     */
    public function index()
    {
        $campaignContacts = CampaignContact::all();
        return view('campaign_contacts.index', compact('campaignContacts'));
    }

    /**
     * 2. Show the form for creating a new campaign-contact link.
     */
    public function create()
    {
        $campaigns = Campaign::all();
        $contacts = Contact::all();
        return view('campaign_contacts.create', compact('campaigns', 'contacts'));
    }

    /**
     * 3. Store a newly created link into database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'campaign_id' => 'required|exists:campaigns, id',
            'contact_id' => 'required|exists:contacts, id',
        ]);

        CampaignContact::create([
            'campaign_id' => $request->campaign_id,
            'contact_id' => $request->contact_id,
        ]);

        return redirect()->route('campaign_contacts.index')->with('success', 'Contact linked to camaign successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove an existing link.
     */
    public function destroy(CampaignContact $campaignContact)
    {
        $campaignContact->delete();
        return redirect()->route('campaign_contacts.index')->with('success', 'Contact unlinked from campaign successfully.');
    }
}