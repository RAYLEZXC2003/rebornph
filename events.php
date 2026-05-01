<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Metronome Battle | Togepi Chaos · Unova</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(145deg, #e9f0f5 0%, #dbe6ef 100%);
            font-family: system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
            padding: 1.5rem;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* clean card - simple & modern */
        .home {
            max-width: 620px;
            width: 100%;
            background: #ffffff;
            border-radius: 32px;
            padding: 1.8rem;
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.08), 0 2px 6px rgba(0, 0, 0, 0.02);
            transition: box-shadow 0.2s;
        }

        h1 {
            font-size: 1.9rem;
            font-weight: 750;
            color: #1d3e5e;
            letter-spacing: -0.3px;
            line-height: 1.2;
            display: flex;
            flex-wrap: wrap;
            align-items: baseline;
            gap: 6px;
        }

        .to-gepi {
            background: #fdebb3;
            font-size: 1rem;
            font-weight: 500;
            padding: 0.2rem 0.75rem;
            border-radius: 40px;
            color: #b45f1b;
            vertical-align: middle;
            letter-spacing: 0;
        }

        .accent-line {
            width: 54px;
            height: 3px;
            background: #f9cf86;
            border-radius: 8px;
            margin: 0.5rem 0 1.2rem 0;
        }

        /* event highlight block */
        .event-details {
            background: #fef7e8;
            border-radius: 24px;
            padding: 1rem 1.2rem;
            margin: 0.5rem 0 1.2rem 0;
            border: 1px solid #ffe0b5;
        }

        .detail-row {
            display: flex;
            flex-wrap: wrap;
            align-items: baseline;
            gap: 0.6rem;
            margin-bottom: 0.55rem;
            font-size: 0.95rem;
        }

        .detail-label {
            font-weight: 700;
            min-width: 70px;
            color: #b4621a;
        }

        .detail-value {
            color: #2c4e6e;
            font-weight: 500;
        }

        .section-title {
            font-size: 1rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #c07c3a;
            margin: 1.2rem 0 0.75rem 0;
            display: inline-block;
            border-left: 3px solid #f5bc70;
            padding-left: 10px;
        }

        /* rules list - clean cards */
        .rules-list {
            list-style: none;
            background: #fdfdf5;
            border-radius: 20px;
            border: 1px solid #efe3cf;
            overflow: hidden;
        }

        .rules-list li {
            padding: 0.85rem 1rem;
            border-bottom: 1px solid #f0e5d6;
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            font-size: 0.94rem;
            color: #1f3a4b;
            line-height: 1.4;
        }

        .rules-list li:last-child {
            border-bottom: none;
        }

        .bullet {
            color: #f5a65a;
            font-weight: 600;
            font-size: 1rem;
            min-width: 20px;
        }

        .rules-list strong {
            font-weight: 700;
            color: #bd6b2a;
        }

        .rule-extra {
            color: #5f6f7e;
            margin-left: 0.2rem;
        }

        /* special notice for borrowing & DQ */
        .notice-box {
            background: #fff6e8;
            border-left: 4px solid #f4b643;
            border-radius: 16px;
            padding: 0.9rem 1rem;
            margin: 1.2rem 0 0.8rem 0;
            font-size: 0.86rem;
            color: #3f4e5e;
        }

        .notice-box strong {
            color: #cf6f2e;
        }

        /* footer event & channel */
        .event-footer {
            margin-top: 1.5rem;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 0.8rem;
            border-top: 1px solid #eedfcb;
            padding-top: 1.25rem;
        }

        .badge {
            background: #f3eadc;
            padding: 0.4rem 1rem;
            border-radius: 60px;
            font-size: 0.8rem;
            font-weight: 500;
            color: #a75518;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .channel-info {
            font-size: 0.8rem;
            background: #e6dfd3;
            padding: 0.35rem 1rem;
            border-radius: 40px;
            color: #4d3b28;
            font-weight: 500;
        }

        /* responsive */
        @media (max-width: 550px) {
            body {
                padding: 1rem;
            }
            .home {
                padding: 1.3rem;
            }
            h1 {
                font-size: 1.55rem;
                flex-direction: column;
                align-items: flex-start;
            }
            .to-gepi {
                font-size: 0.85rem;
            }
            .detail-row {
                gap: 0.4rem;
            }
            .detail-label {
                min-width: 65px;
            }
            .rules-list li {
                padding: 0.75rem 0.85rem;
                font-size: 0.88rem;
                flex-wrap: wrap;
            }
            .notice-box {
                padding: 0.7rem 0.9rem;
                font-size: 0.82rem;
            }
            .event-footer {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.6rem;
            }
        }

        @media (max-width: 420px) {
            .detail-label {
                min-width: 100%;
            }
            .event-details {
                padding: 0.8rem;
            }
        }

        /* hover subtle */
        .rules-list li:hover {
            background: #fffaf2;
            transition: background 0.15s;
        }
    </style>
</head>
<body>
    <div class="home">
        <h1>
            Metronome Battle <span class="to-gepi"> Togepi-only 🐣</span>
        </h1>
        <div class="accent-line"></div>

        <!-- Event main info card -->
        <div class="event-details">
            <div class="detail-row">
                <span class="detail-label">📍 What:</span>
                <span class="detail-value">Metronome Battle · Only Togepi allowed</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">🗺️ Where:</span>
                <span class="detail-value">Unova — Accumula Town (battle location)</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">📅 When:</span>
                <span class="detail-value">April 15, 2026 — 9pm</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">📡 Channel:</span>
                <span class="detail-value">Channel 2</span>
            </div>
        </div>

        <!-- core rules section -->
        <div class="section-title">⚔️ battle rules</div>
        <ul class="rules-list">
            <li>
                <span class="bullet">●</span>
                <span><strong>Only Togepi</strong> <span class="rule-extra">— no other Pokémon allowed. Both battlers must use Togepi.</span></span>
            </li>
            <li>
                <span class="bullet">●</span>
                <span><strong>Metronome only</strong> <span class="rule-extra">— no other moves permitted. If any other move is used, instant DQ.</span></span>
            </li>
            <li>
                <span class="bullet">●</span>
                <span><strong>Must be Trainer's OT</strong> <span class="rule-extra">— original trainer required (except borrowing clause).</span></span>
            </li>
            <li>
                <span class="bullet">●</span>
                <span><strong>No EV / No Item</strong> <span class="rule-extra">— zero effort values, no held items of any kind.</span></span>
            </li>
            <li>
                <span class="bullet">●</span>
                <span><strong>Disqualification (DQ)</strong> <span class="rule-extra">— using non-metronome moves, wrong Pokémon, or breaking OT rule results in immediate DQ.</span></span>
            </li>
        </ul>

        <!-- special clause: borrowing togepi & route 34 (Johto) -->
        <div class="notice-box">
            <strong>📋 Borrowing Clause — Route 34 (Johto) exception</strong><br>
            Togepi can be caught on <strong>Route 34 in Johto</strong>. If a trainer cannot access that location to catch their own Togepi (e.g. game restrictions, region lock), they are allowed to <strong>borrow a Togepi from another trainer</strong>. 
            The borrowed Togepi must still respect the <strong>Metronome-only, No EV, No Item</strong> rules. 
            All borrowed Togepi must be declared before the battle starts.
        </div>

        <!-- additional clarity: other moves ban & location -->
        <div class="notice-box" style="background: #fef3e3; border-left-color: #e09d42;">
            <strong>⚠️ Only move allowed: Metronome</strong><br>
            Any use of Struggle, status moves, or any other attack learned via Metronome randomness is <strong>not allowed</strong> — if a Pokémon uses any move other than Metronome (by any means), the trainer is disqualified. 
            Keep it pure: only the Metronome button. Battles take place in <strong>Accumula Town, Unova</strong> — be on time.
        </div>

        <!-- footer with date / channel -->
        <div class="event-footer">
            <div class="badge">
                🎲 April 15, 2026 — 9pm
            </div>
            <div class="channel-info">
                📺 Channel 2 · Unova Region
            </div>
            <div class="badge" style="background: #dfd6c8;">
                🐣 Togepi only
            </div>
        </div>

        <!-- tiny extra reminder with route 34 mention -->
        <div style="font-size: 0.7rem; text-align: center; margin-top: 1rem; color: #a07d56; border-top: 1px dashed #eddcc8; padding-top: 0.8rem;">
            ⚡ No exceptions: Metronome only · DQ enforced · Borrowed Togepi allowed only if original catch location (Route 34, Johto) is inaccessible.
        </div>
    </div>
</body>
</html>